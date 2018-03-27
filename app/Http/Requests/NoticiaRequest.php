<?php

namespace avaa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class NoticiaRequest extends FormRequest
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
            'titulo' => 'min:2|max:50|required',
            'informacion_contacto' => 'required',
            'contenido' => 'min:60|required',
            'url_imagen' => 'required|file|mimes:jpeg,bmp,png,jpg|image', //descomentar extension=php_fileinfo.dll en php.ini para que funcione esta validación
            'es_miembro_institucional' => 'boolean',
            'tipo' => 'in:noticia,articulo',
            'url_articulo' => $url_articulo_rule,
            'email_contacto' => $email_contacto_rule
        ];
    }
}
