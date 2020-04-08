<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
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
          'nickname' => 'required|min:5|max:20',
          'password' => 'required|min:5|max:50|confirmed',
          'password_confirmation' => 'required'
        ];
    }

    public function messages()
    {
      return [
        'nickname.required' => 'Поле "Никнейм" является обязательным',
        'password.required' => 'Поле "Пароль" является обязательным',
        'password_confirmation.required' => 'Поле "Повторный пароль" является обязательным',
        'password.confirmed' => 'Пароль не совпадает с подтверждающим паролем',
        'password.min' => "Длина пароля не может быть меньше :min символов",
        'password.max' => "Длина пароля не может быть больше :max символов",
        'nickname.min' => "Длина никнейма не может быть меньше :min символов",
        'nickname.max' => "Длина никнейма не может быть больше :max символов",
        'FirstName.required' => "Имя является обязательным полем",
        'LastName.required' => "Фамилия является обязательным полем"
      ];
    }
}
