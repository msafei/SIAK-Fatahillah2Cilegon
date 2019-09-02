<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
class ErrorPembayaranLain extends FormRequest
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
     * @return array
     */
    public function rules()
    {

    }

    public function messages()
    {
        return [
        'jenis_pembayaran_id.required' => 'Data tidak boleh kosong',
        'jenis_pembayaran_id.unique_with' => 'Data sudah tersedia'
        ];
    }

}
