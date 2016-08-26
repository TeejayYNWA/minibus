<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 18/08/16
 * Time: 15:57
 */

namespace App\Http\Controllers;
use App\Vehicle;
use Session;
use DB;

class QuoteController extends Controller
{
    public function index()
    {
        dump(Session::all());
        return view('quote');
    }

    public function detailsToDB()
    {
        dump(Session::all());
        $sessionInfo = (Session::all());
        $companyArray = $sessionInfo['company'];
        dump($companyArray);

        foreach ($companyArray as $key => $companyInfo)
        {
            $colName[] = $key;
            $colData[] = $companyInfo;
        }

        dump($colName);
            
        foreach ($vehicles as $vehicleData) {
            $vehicle = new Vehicle();
            $vehicle->reg_no = $vehicleData['reg_No'];

            //....

            $vehicle->save();
        }


       // DB::insert('insert into company_information (' .$colName .') VALUES (' .$colData);

        DB::insert('insert into company_information (company_id, company_name, contact_number, company_address, company_postcode) values (?, ?)', $colData);

    }


}