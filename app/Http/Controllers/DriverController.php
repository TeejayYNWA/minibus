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
        dump(session()->all());
        $driverInformation =  Session::get('drivers',[]);
        $viewData=[
          'drivers'=> $driverInformation
        ];
        return view('drivers', $viewData );
    }

    public function redirect(DriverValidationRequest $request)
    {
        //get validated driver data
        $driverInfo = $request->except(['_token']);
        $allDriverInfo = Session::get('drivers', []);

        //is this a new driver or an existing one?
        if( isset( $driverInfo['id'] ) && !empty($driverInfo['id']))
        {
            $currentDriverId = $driverInfo['id'];
            $allDriverInfo[ $currentDriverId ] = $driverInfo;

        }else{
            //if this is the first driver set its ID to 1 otherwise calculate the id from the highest array key
            if (empty($allDriverInfo)) {
                $driverInfo['id'] = 1;
            }else{
                //if new create driver id and then add driver onto the end of the drivers session array
                $driverInfo['id'] = max(array_keys($allDriverInfo)) + 1;//(string) count($allDriverInfo);
            }

            $allDriverInfo[ $driverInfo['id'] ] = $driverInfo;

        }

        // finally save all driver info
        Session::put('drivers', $allDriverInfo);

        return redirect('/drivers');
    }

    private function getViewVariables()
    {
        return [
            'titles' => ['Mr' => 'Mr', 'Mrs' => 'Mrs', 'Ms' => 'Ms', 'Miss' => 'Miss', 'Dr' => 'Dr', 'Rev' => 'Rev', 'Prof' => 'Prof'],
            'licenceHeld' => ['0' => '0 to 12 months', '12' => '1 Year', '24' => '2 Years', '36' => '3 Years', '48' => '4 Years', '60' => '5 Years', '72' => '5 or more Years']
        ];
    }

    public function addDriver()
    {
        $data = $this->getViewVariables();
        $data['driver'] = [];

        return view('driver', $data);
    }

    public function edit($id)
    {
        $allDriverData = Session::get('drivers');
        $driverData = $allDriverData[$id];

        $data = $this->getViewVariables();
        $data['driver'] = $driverData;

        return view('driver', $data);
    }

    public function delete($id)
    {
        $allDriverData = Session::get('drivers');
        unset($allDriverData[$id]);

        Session::put('drivers', $allDriverData);

        return redirect('/drivers');
        
    }
}