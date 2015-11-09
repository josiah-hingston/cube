<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DockerRequest extends Request
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
        return [
            'asset' => 'required|unique:desktops|unique:laptops|unique:dockers|unique:monitors',
            'serial' => 'required|unique:desktops|unique:laptops|unique:dockers|unique:monitors',
            'make' => 'required',
            'model' => 'required',
            'issued_date' => 'required',
            'purchase_date' => 'required'
        ];
    }
}
