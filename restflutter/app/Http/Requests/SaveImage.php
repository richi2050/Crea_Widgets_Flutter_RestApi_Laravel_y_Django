<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveImage extends FormRequest
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
            'name' => 'required',
            'url' => 'required|mimes:jpeg,png|max:10240', //10Mb
            'group_id' => 'required',
        ];
    }
}
