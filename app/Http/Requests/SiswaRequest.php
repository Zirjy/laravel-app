<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $id = $this->route('siswa') ? $this->route('siswa')->id : null;

        return [
            'nama_siswa' => [
                'required',
                'string',
                'max:255',
                Rule::unique('siswas')->ignore($id),
            ],
            'kelas' => 'required',
            'keterangan' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'nama_siswa.required' => 'Silahkan isi kolom Nama Siswa terlebih dahulu!',
            'nama_siswa.unique' => 'Nama Siswa ini sudah ditambahkan sebelumnya, silahkan pilih nama yang lain!',
            'kelas.required' => 'Isi data Kelas dari Siswa!',
            'keterangan.required' => 'Silahkan isi Keterangan dari Siswa!',
        ];
    }
}