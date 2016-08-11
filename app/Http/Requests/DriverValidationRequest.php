<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 10/08/16
 * Time: 12:46
 */

namespace App\Http\Requests;


class DriverValidationRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return [
            'first_name' =>              'required|alpha_dash|alpha',
            'intial'=>                   'alpha|max:1',
            'surname'=>                  'required|alpha_dash',
            'dob'=>                      'required|date',
            'occupation'=>               'required|string',
            'relation_to_proposer'=>     'required|string|'
        ];
    }
}