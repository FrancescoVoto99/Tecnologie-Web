<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequeste extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|string| max:255',
            'surname' => 'required| string| max:255',
            'email' => '',
            'role'=>'',
            'username' => '',
            'password' => 'required|string|min:8| confirmed',
            'societa'=>'string',
            
        ];
    }
}
