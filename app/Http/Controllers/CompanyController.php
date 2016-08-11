<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 09/08/16
 * Time: 11:28
 */

namespace App\Http\Controllers;


use App\Http\Requests\CompanyValidationRequest;
use Session;

class CompanyController extends Controller
{

    public function index()
    {
        return view('company');
    }


    public function redirect( CompanyValidationRequest $request ) {

        $companyInfo = $request->except(['_token']);
        Session::put('company', $companyInfo);

        return redirect('/vehicle');
    }

    
}