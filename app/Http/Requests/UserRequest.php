<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * store validations
     */
    private function storeRequest()
    {
        return [
            'name'   => 'required',
            // 'phone'    => 'required|unique:users,phone|regex:/^(01)[0-9]{9}$/',
            'email'    => 'nullable|unique:users,email',
            'role'    => 'nullable',
            'password' => [
                'required',
                'min:8',
                // 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                'confirmed'
            ],
            'password_confirmation' => 'required|same:password',
            // 'national_id'      => 'unique:users,national_id|regex:/^[0-9]{14}$/',
        ];
    }

    /**
     * update validations
     */
    private function updateRequest()
    {
        return [
            'name' => 'nullable',
        ];
    }

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
        return request()->method() == 'PUT' ? $this->updateRequest() : $this->storeRequest();
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages()
    {
        return [
            'name.required'  => 'الاسم مطلوب',
            'email.required' => 'الهاتف مطلوب',
            'email.unique' => 'الهاتف مسجل من قبل',
            // 'phone.required'            => 'الهاتف مطلوب',
            // 'phone.unique'              => 'الهاتف مسجل من قبل',
            // 'phone.regex'               => 'صيغة الهاتف غير صحيحة',
            // 'national_id.required'      => 'الرقم القومي مطلوب',
            // 'national_id.unique'        => 'الرقم القومي مسجل من قبل',
            // 'national_id.regex'         => 'صيغة الرقم القومي غير صحيحة',
            'password.required'         => 'الرقم السري مطلوب',
            'password.min'              => 'الرقم السري يجب الا يقل 8 احرف',
            'password.regex'            => 'الرقم السري يجب ان يحتوي على حروف و ارقام و رموز',
            'password_confirmation.required' => 'يرجى تأكيدالرقم السري',
        ];
    }
}
