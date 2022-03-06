<?php

declare(strict_types=1);

namespace App\Http\Requests\Elmarzougui\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'telephone'=>['nullable','phone:MA'],
            'message' => ['required', 'string']
        ];
    }
}
