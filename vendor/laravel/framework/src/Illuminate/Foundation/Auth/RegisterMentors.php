<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use avaa\Documento;

trait RegisterMentors
    {use RedirectMentor;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.registerMentor');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerMentors(Request $request)
    {
        
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        $file = $request->file('url_pdf');
        $name = 'HojaDeVida_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/documentos/mentores/';
        $file->move($path, $name);
        $documento = new Documento();
        $documento->user_id = $user->id;
        $documento->url = '/documentos/mentores/'.$name;
        $documento->titulo='Hoja De Vida de'.$user->name;
        $documento->save();

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
