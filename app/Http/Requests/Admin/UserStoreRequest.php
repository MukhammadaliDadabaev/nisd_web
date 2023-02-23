<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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

  public function rules()
  {
    return [
      'name' => 'required|string',
      'phone' => 'required|numeric',
      'email' => 'required|string|email|unique:users',
      'password' => 'required|string',
      'photo' => 'nullable|image|max:2048',
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Ushbu qator, to`ldirilishi shart',
      'name.string' => 'Ism qator bo`lishi kerak',
      'phone.required' => 'Ushbu qator, to`ldirilishi shart',
      'phone.string' => 'Ism qator bo`lishi kerak',
      'email.required' => 'Ushbu qator, to`ldirilishi shart',
      'email.string' => 'Pochta satr bo`lishi kerak',
      'email.email' => 'Pochtangiz formatga mos kelishi kerak 👉 mail@some.domain',
      'email.unique' => 'Bu e-mailga ega foydalanuvchi allaqachon mavjud',
    ];
  }
}
