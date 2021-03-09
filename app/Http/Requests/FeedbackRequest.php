<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500',
        ];
    }

    /**
     *  Get the validation messages that apply to the rules alerts.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Поле имя явлется обязательным',
            'name.min' => 'Поле имя должно содержать не менее :min символов',
            'name.max' => 'Поле имя может содержать не более :max символов',
            'last_name.required' => 'Поле фамилия явлется обязательным',
            'last_name.min' => 'Поле фамилия должно содержать не менее :min символов',
            'last_name.max' => 'Поле фамилия может содержать не более :max символов',
            'email.last_name' => 'Поле email явлется обязательным',
            'subject.last_name' => 'Поле тема явлется обязательным',
            'subject.min' => 'Поле тема должно содержать не менее :min символов',
            'subject.max' => 'Поле тема может содержать не более :max символов',
            'message.last_name' => 'Поле соощение явлется обязательным',
            'message.min' => 'Поле соощение должно содержать не менее :min символов',
            'message.max' => 'Поле соощение может содержать не более :max символов',
        ];
    }
}
