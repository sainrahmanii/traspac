<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionsRequest extends FormRequest
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
            'nip'               => 'required|numeric|min:7,max:12',
            'npwp'              => 'required|string|min:7,max:12',
            'jabatan'           => 'required|string',
            'golongan'          => 'required|string',
            'eselon'            => 'required|string',
            'tempat_tugas'      => 'required|string',
            'unit_kerja'        => 'required|string'
        ];
    }
}
