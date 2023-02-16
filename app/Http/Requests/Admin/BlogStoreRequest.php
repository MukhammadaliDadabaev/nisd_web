<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return  true;
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
      'user_id' => 'nullable',
      'category_id' => 'nullable',
      'content' => 'required|string',
      'status' => 'nullable',
      'lang' => 'required|string',
      'image' => 'nullable|image|max:2048',
      'public_date' => 'nullable',
    ];
  }

  public function messages()
  {
    return [
      'title.required' => 'Ushbu qator to`ldirilishi shart',
      'title.string' => 'Ma`lumotlar satr turiga mos kelishi kerak',
      'image.required' => 'Ushbu qator to`ldirilishi shart',
      'image.file' => 'Siz faylni tanlashingiz kerak',
      'image.required' => 'Ushbu qator to`ldirilishi shart',
      'image.file' => 'Siz faylni tanlashingiz kerak',
      'user_id.required' => 'Ushbu qator to`ldirilishi shart',
      'category_id.required' => 'Ushbu qator to`ldirilishi shart',
    ];
  }
}
