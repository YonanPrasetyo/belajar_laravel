<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'max:100|required',
            'gender' => 'required',
            'nis' => 'unique:students|max:10|required',
            'class_id' => 'required'
        ];
    }

    public function attributes(){
        return [
            'name' => 'Nama',
            'gender' => 'Gender',
            'nis' => 'NIS',
            'class_id' => 'Kelas'
        ];
    }

    public function messages(){
        return [
            'name.max' => 'Nama tidak boleh lebih dari :max karakter',
            'name.required' => 'Nama wajib diisi',
            'gender.required' => 'Gender wajib diisi',
            'nis.unique' => 'Nis sudah ada',
            'nis.max'=> 'Nis tidak boleh lebih dari :max karakter',
            'nis.required' => 'Nis wajib diisi',
            'class_id.required' => 'Kelas wajib diisi'
        ];
    }
}
