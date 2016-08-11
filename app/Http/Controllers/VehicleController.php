<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 09/08/16
 * Time: 16:47
 */

namespace App\Http\Controllers;

use App\Http\Requests\VehicleValidationRequest;
use Session;

class VehicleController extends Controller
{
    public function index()
    {
        return view('vehicle');
    }

    public function redirect( VehicleValidationRequest $request ) {

        $vehicleInfo = $request->except(['_token']);
        Session::put('vehicle', $vehicleInfo);

        return redirect('/driver');
    }

}