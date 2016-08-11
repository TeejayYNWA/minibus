<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 09/08/16
 * Time: 17:14
 */

namespace App\Http\Requests;


class VehicleValidationRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return [
            'reg_no' =>       'required|alpha_num',
            'make' =>       'required|string',
            'model'=>      'required|string',
            'engine_size'=>     'required|numeric',
            'fuel_type'=>    'required|alpha',
            'transmission'=>       'required|alpha',
            'reg_year'=>       'required|numeric',
            'number_seats'=>       'required|numeric',
            'current_value'=>       'required|numeric',
            'main_driver'=>       'required|string',
            'other_drivers'=>       'required'
        ];
    }
}