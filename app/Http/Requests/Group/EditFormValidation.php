<?php

namespace App\Http\Requests\Group;

use Illuminate\Foundation\Http\FormRequest;

class EditFormValidation extends FormRequest
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
            'title'=>'required| max:100 | unique:groups,title,'.$this->request->get('id'),
            'status'=>'required'
        ];
        /*unique:groups,title,'.$this->request->get('id')*/
    }

}
