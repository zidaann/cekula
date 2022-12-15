<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalSekolahRequest extends FormRequest
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
            'pamflet' => 'nullable|image|file|max:1024|mimes:jpg,jpeg,png',
            'judul' => 'required|unique:jadwal_sekolahs',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'deskripsi' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'pamflet' => 'Gambar tidak boleh kosong!',
            'judul' => 'Judul sudah pernah digunakan!',
            'tgl_mulai' => 'Tanggal pelaksanaan tidak boleh kosong!',
            'tgl_selesai' => 'Tanggal selesai pelaksanaan tidak boleh kosong!',
            'deskripsi' => 'Deskripsi tidak boleh kosong'
        ];
    }
}
