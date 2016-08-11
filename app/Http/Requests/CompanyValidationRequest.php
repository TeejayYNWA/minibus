<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 09/08/16
 * Time: 14:21
 */

namespace App\Http\Requests;


class CompanyValidationRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return [
            'company_name' =>       'required|min:3',
            'contact_name' =>       'required|string',
            'contact_number'=>      'required|numeric|digits:11',
            'company_address'=>     'required|string',
            'company_postcode'=>    'required|alpha_num|',
            'business_type'=>       'required|string'
        ];
    }
}
