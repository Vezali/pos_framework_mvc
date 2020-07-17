<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudyRequest extends FormRequest
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
        return [
            'description' => 'required|string',
            'date_init' => 'required|date',
            'date_finish' => 'required|date',
            'area_id' => 'required|numeric|exists:areas,id',
            'status' => [
                'required',
                Rule::in(['Finalizado', 'Em atraso', 'Em andamento']) 
            ]
        ];
}

    public function messages()
    {
        return [
            'description.require' => 'O campo descrição é obrigatório',
            'date_ini.require' => 'O campo data inicial é obrigatório',
            'date_finish.require' => 'O campo data final é obrigatório',
            'status.require' => 'O campo situaçãol é obrigatório',
            'area.required' => 'o campo área é obrigatório'

        ];
    }

}