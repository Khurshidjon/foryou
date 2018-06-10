<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
        $photos = count($this->input('photos'));

        foreach (range(0, $photos) as $item){
            $rule['photos. ' . $item] = 'image | mimes:jpg, bmp, ping | max:100000';
        }
        return $rule;
    }
}
