<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PageStoreRequest extends FormRequest
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
      'title' => 'required|string',
      'status' => 'required|numeric',
      'lang' => 'required|string',
      'description' => 'required|string',
    ];
  }

  public function messages()
  {
    return [
      'title.required' => 'Ushbu qator to`ldirilishi shart',
      'title.string' => 'Ma`lumotlar satr turiga mos kelishi kerak',
      'status.required' => 'Ushbu qator to`ldirilishi shart',
    ];
  }
}
