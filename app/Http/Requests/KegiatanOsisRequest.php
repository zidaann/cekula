<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KegiatanOsisRequest extends FormRequest
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
            'nama' => 'required|unique:kegiatan_oses',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'lokasi' => 'required',
            'user_id' => 'required',
            'deskripsi' => 'required'
        ];
    }

    public function messages()
    {
      return [
            'pamflet' => 'Gambar tidak boleh kosong!',
            'nama' => 'Nama tidak boleh kosong!',
            'tgl_mulai' => 'Tanggal mulai tidak boleh kosong!',
            'tgl_selesai' => 'Tanggal selesai tidak boleh kosong!',
            'lokasi' => 'Lokasi tidak boleh kosong!',
            'user_id' => 'Penanggung jawab tidak boleh kosong!',
            'deskripsi' => 'deskripsi tidak boleh kosong!'
      ] ; 
    } 
}
