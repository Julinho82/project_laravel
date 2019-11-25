<?php

namespace App\Http\Requests\Api\ModoPagos;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreRequest extends FormRequest
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
            //
            'nombre'=>'required',
            'otros_detalles'=>'required',

        ];
    }

    protected function failedValidation(Validator $validator)
    { 
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(
            [
                'success'=>false,
                'data'=>$errors,
                'message'=> "Error al validar los campos de ModoPagos"
            ],
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
