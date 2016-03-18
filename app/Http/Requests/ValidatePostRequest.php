<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
class ValidatePostRequest extends Request
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
            'title' => 'required|min:10',
            'demande' => 'required|min:10',
        ];
    }
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Le titre obligatoire',
            'title.min'      => 'Le titre doit �tre > 10 caract�res',
            'demande.required' => 'La decription obligatoire',
            'demande.min'      => 'La description doit �tre > 10 caract�res',
        ];
    }
}