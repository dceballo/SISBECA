<?php

namespace avaa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rol_rule='in:coordinador,editor,directivo';
        $email_rule = 'required|max:30|email';
        $cedula_rule= 'nullable|min:2|max:15';
        if (!($this->method() == 'PUT'))
        {
            // Create operation. There is no id yet.
            $email_rule .= '|unique:users,email';
            $cedula_rule .= '|unique:users,cedula';

            if($this->get('rol')!=='coordinador')
            {
                $rol_rule .= '|unique:users,rol';
            }
        }

        return [
            'name' => 'required',
            'email' => $email_rule,
            'password' => 'min:6|required|max:30',
            'cedula' => $cedula_rule,
            'rol' => $rol_rule

        ];
    }
}
