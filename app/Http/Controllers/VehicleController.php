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
use Validator;

class VehicleController extends Controller
{

    private $sessionKey = 'vehicles';

    public function index()
    {

        if( ! Session::has('company') || empty( Session::get('company') ) )
        {
            return redirect('company');
        }


        $vehicleInformation = Session::get($this->sessionKey, []);
        $viewData = [
            'vehicles' => $vehicleInformation
        ];

        return view('vehicles', $viewData);
    }

    public function redirect(VehicleValidationRequest $request)
    {
        //get validated info
        $vehicleInfo = $request->except(['_token']);
        $allVehicleInfo = Session::get($this->sessionKey, []);


        //is this a new driver or an existing one?
        if (isset($vehicleInfo['id']) && !empty($vehicleInfo['id'])) {
            $currentVehicleId = $vehicleInfo['id'];
            $allVehicleInfo[$currentVehicleId] = $vehicleInfo;

        } else {
            //if this is the first driver set its ID to 1 otherwise calculate the id from the highest array key
            if (empty($allVehicleInfo)) {
                $vehicleInfo['id'] = 1;
            } else {
                //if new create driver id and then add driver onto the end of the drivers session array
                $vehicleInfo['id'] = max(array_keys($allVehicleInfo)) + 1;//(string) count($allDriverInfo);
            }

            $allVehicleInfo[$vehicleInfo['id']] = $vehicleInfo;

        }


        ///Save all vehicle info
        Session::put($this->sessionKey, $allVehicleInfo);

        return redirect('/vehicles');
    }

    public function addVehicle()
    {
        if( ! Session::has('company') || empty( Session::get('company') ) )
        {
            return redirect('company');
        }

        // collect drivers names
        $drivers = session('drivers');

        // send drivers to view
        $data = [
            'drivers' => $this->getDriverNames($drivers),
        ];

        //add new driver to array
        $data['vehicle'] = [];


        return view('vehicle', $data);
    }

    public function edit($id)
    {
        $allVehicleData = Session::get('vehicles');
        $vehicleData = $allVehicleData[$id];
        // collect drivers names
        $drivers = session('drivers');

        // collect drivers names
        $drivers = session('drivers');

        // send drivers to view
        $data = [
            'drivers' => $this->getDriverNames($drivers),
        ];

        //add new driver to array
        $data['vehicle'] = [];

        $data['vehicle'] = $vehicleData;

        return view('vehicle', $data);
    }

    public function delete($id)
    {
        $allVehicleData = Session::get('vehicles');
        unset($allVehicleData[$id]);

        Session::put('vehicles', $allVehicleData);

        return redirect('/vehicles');

    }

    /**
     * @param $drivers
     * @return array
     */
    public function getDriverNames($drivers)
    {
        $driverNames = [];
        // collect each drivers name and assign it to a key of that drivers id
        foreach ($drivers as $driver) {
            $driverNames[$driver['id']] = $driver['title'] . ' ' . $driver['first_name'] . ' ' . $driver['surname'];
        }
        return $driverNames;
    }

    public function validationCheck()
    {
        $info = \Session::all();
        $errors = [];

        if (!isset($info['vehicles']) || empty($info['vehicles']))
        {
            $errors[] = 'Minimum one vehicle required';
            return redirect('/vehicles')
                ->withErrors($errors);
        }

        
        $vehicles = $info['vehicles'];
        //collect all reg nos
        $regNos = [];
        foreach ($vehicles as $vehicle) {
            $regNos[] = $vehicle['reg_no'];
        }

        //check for duplicate regnos
        $duplicates = (array_count_values($regNos));

        foreach ($duplicates as $reg => $count) {
            if ($count > 1) {
                $errors[] = 'Cannot have duplicate registration number ' . $reg;
            }

        }


        if ($errors) {
            return redirect('/vehicles')
                ->withErrors($errors);
        }

        return redirect('/checkInfo');
    }


}

