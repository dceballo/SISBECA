<?php

namespace avaa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class NoticiaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $email_contacto_rule = '';
        $url_articulo_rule= '';
        if (!($this->method() == 'PUT')) {

            if($this->get('tipo')==='articulo')
            {
                $url_articulo_rule .= 'required|url';
                $email_contacto_rule .='nullable|email|max:30|unique:noticias,email_contacto';
            }

        }

            return [
            'titulo'                   => 'required|min:2,max:100|unique:noticias,titulo',
            'informacion_contacto'     => 'required',
            'contenido'                => 'required|min:60',
            'url_imagen'               => 'required|file|image|mimes:jpeg,bmp,png,jpg', 
            'es_miembro_institucional' => 'boolean',
            'tipo'                     => 'in:noticia,articulo',
            'url_articulo'             => $url_articulo_rule,
            'email_contacto'           => $email_contacto_rule
        ];
    }
}
