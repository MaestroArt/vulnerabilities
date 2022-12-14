<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VulnerablityRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'          => 'required|string|max:255',
            'description'   => 'required|string|max:65535',
            'source_link'   => 'sometimes|nullable|url|max:255'
        ];
    }
}
