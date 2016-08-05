@extends('layout.layout')

@section('title', 'Vehicle Info')

@section('content')

    <h1>Enter vehicle info here</h1>

    <div class="panel">
        <form class="form" method="post" action="/vehicleInfo">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="reg">Reg Number </label>
                <input type="text" placeholder="Registration" name="reg_no" >
            </div>

            <div class="form-group">
                <label for="make">Make</label>
                <input type="text" placeholder="Make" name="make" >
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" placeholder="Model" name="model" >
            </div>

            <div class="form-group">
                <label for="address">Engine Size</label>
                <input type="text" placeholder="Engine Size" name="engine_size" >
            </div>

            <div class="form-group">
                <label for="fuel type">Fuel Type</label>
                <input type="text" placeholder="Fuel Type" name="fuel_type" >
            </div>

            <div class="form-group">
                <label for="transmission">Transmission</label>
                <input type="text" placeholder="Transmission" name="transmission" >
            </div>



            <div class="form-group">
                <label for="year">Year Of Registration </label>
                <input type="text" placeholder="Registration" name="reg_year" >
            </div>

            <div class="form-group">
                <label for="seats">Number of seats</label>
                <input type="text" placeholder="Number of seats" name="number_seats" >
            </div>

            <div class="form-group">
                <label for="mileage">Estimated annual mileage</label>
                <input type="text" placeholder="Mileage" name="annual_mileage" >
            </div>

            <div class="form-group">
                <label for="value">Current Value</label>
                <input type="text" placeholder="Current Value Size" name="current_value" >
            </div>

            <div class="form-group">
                <label for="driver name ">Main driver name</label>
                <input type="text" placeholder="Main driver name" name="main_driver" >
            </div>

            <div class="form-group">
                <label for="transmission">Number of other drivers</label>
                <input type="text" placeholder="Other Drivers" name="other_drivers" >
            </div>


            <button type="submit">Submit</button>
        </form>
    </div>





@endsection;