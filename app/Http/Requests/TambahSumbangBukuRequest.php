<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TambahSumbangBukuRequest extends FormRequest
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
            'judul_buku' => 'required',
            'kategori_id' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'kota_terbit' => 'required',
            'status_buku' => 'required'
        ];
    }
}
