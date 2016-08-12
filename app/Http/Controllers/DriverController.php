<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 10/08/16
 * Time: 12:39
 */

namespace App\Http\Controllers;

use App\Http\Requests\DriverValidationRequest;
use Session;

class DriverController extends Controller
{
    public function index()
    {
        return view('driver');
    }

    public function redirect( DriverValidationRequest $request ) {

        $driverInfo = $request->except(['_token']);
        Session::put('driver', $driverInfo);

        return redirect('/vehicle');
    }
}