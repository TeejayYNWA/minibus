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
        dump(session()->all());

        // collect drivers names
        $driver = session('driver');
        $drivers[] = $driver['first_name'] . ' ' .$driver['surname'];
        $drivers[] = 'Talvinder Bansal';
        $drivers[] = 'Harbinder Bansal';

        // send drivers to view
        $data = [
            'drivers' => $drivers,
        ];

        return view('vehicle', $data);
    }

    public function redirect( VehicleValidationRequest $request ) {

        $vehicleInfo = $request->except(['_token']);
        Session::put('vehicle', $vehicleInfo);

        return redirect('/checkInfo');
    }

}