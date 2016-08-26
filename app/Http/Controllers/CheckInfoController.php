<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 17/08/16
 * Time: 15:10
 */

namespace App\Http\Controllers;
use App\Http\Requests\Request;
use Validator;
use Session;


class CheckInfoController extends Controller
{
    public function index()
    {
        if( ! Session::has('company') || empty( Session::get('company') ) )
        {
            return redirect('company');
        }

        $info = \Session::all();
      

        $vehicles = $info['vehicles'];
        $drivers = $info['drivers'];
        // uppercase every vehicle make
        // foreach vehicle uppercase the make
        foreach ($vehicles as $key => $vehicle) { 
            //format vehicle data
            $vehicle['reg_no'] = strtoupper($vehicle['reg_no']);
            $vehicle['make'] = strtoupper($vehicle['make']);
            $vehicle['main_driver'] = $this->getDriverName($vehicle, $drivers);

            //re-assign the manipulated vehicle data back onto the $vehicles array
            $vehicles[$key] = $vehicle;
        }

        $viewData = [
            'company' => $info['company'],
            'drivers' => $info['drivers'],
            'vehicles' => $vehicles,
        ];

        return view('checkInfo', $viewData);

    }

    /**
     * @param $vehicle
     * @param $drivers
     * @return string
     */
    public function getDriverName($vehicle, $drivers)
    {
        // fetch the driver name from the driver id
        $driverId = ($vehicle['main_driver']);

        $driver = ($drivers[$driverId]);
        $name = $driver['first_name'] . ' ' . $driver['surname'];
        return $name;
    }








}
