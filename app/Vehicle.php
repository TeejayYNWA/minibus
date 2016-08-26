<?php
/**
 * Created by PhpStorm.
 * User: teejay
 * Date: 18/08/16
 * Time: 17:16
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    protected $table = 'vehicle_information';
    protected $primaryKey = 'vehicle_id';

    public $timestamps = false;

}