<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
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
            'name'              => 'required|string',
            'jk'                => 'required|in:Laki-laki,Perempuan',
            'agama'             => 'required|string',
            'no_handphone'      => 'required|string|min:10,max:13',
            'tempat_lahir'      => 'required|string',
            'tanggal_lahir'     => 'required|date',
            'alamat'            => 'required|string',
            'foto_pegawai'      => 'required|file|mimes:jpg,bmp,png'
        ];
    }
}
