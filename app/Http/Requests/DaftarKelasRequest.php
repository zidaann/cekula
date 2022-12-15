<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaftarKelasRequest extends FormRequest
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
            'tingkat_kelas' => 'required',
            'nama_kelas' => 'required|unique:kelas',
            'user_id' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'tingkat_kelas' => 'Tingkat kelas tidak boleh kosong!',
            'nama_kelas' => 'Nama kelas tidak boleh kosong!',
            'user_id' => 'Wali kelas tidak boleh kosong!'
        ];
    }
}
