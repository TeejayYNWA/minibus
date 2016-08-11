@extends('layout.layout')

@section('title', 'Vehicle Info')

@section('content')
    {{-- dump($errors) --}}
    <h1>Enter vehicle info here</h1>

    <div class="panel">
        <form class="form" method="post" action="/vehicleInfo">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="reg">Reg Number </label>
                <input type="text" placeholder="Registration" name="reg_no" value="{{ old('reg_no', ((Session::has('vehicle.reg_no'))? Session::get('vehicle.reg_no'): '' ) )  }}">
                @if($errors->first('reg_no'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('reg_no') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="make">Make</label>
                <input type="text" placeholder="Make" name="make" value="{{ old('make', ((Session::has('vehicle.make'))? Session::get('vehicle.make'): '' ) )  }}">
                @if($errors->first('make'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('make') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" placeholder="Model" name="model" value="{{ old('model', ((Session::has('vehicle.model'))? Session::get('vehicle.model'): '' ) )  }}">
                @if($errors->first('model'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('model') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="address">Engine Size</label>
                <input type="text" placeholder="Engine Size" name="engine_size" value="{{ old('engine_size', ((Session::has('vehicle.engine_size'))? Session::get('vehicle.engine_size'): '' ) )  }}">
                @if($errors->first('engine_size'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('engine_size') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="fuel type">Fuel Type</label>
                <input type="text" placeholder="Fuel Type" name="fuel_type" value="{{ old('fuel_type', ((Session::has('vehicle.fuel_type'))? Session::get('vehicle.fuel_type'): '' ) )  }}">
                @if($errors->first('fuel_type'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('fuel_type') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="transmission">Transmission</label>
                <input type="text" placeholder="Transmission" name="transmission" value="{{ old('transmission', ((Session::has('vehicle.transmission'))? Session::get('vehicle.transmission'): '' ) )  }}">
                @if($errors->first('transmission'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('transmission') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="year">Year Of Registration </label>
                <input type="text" placeholder="Registration" name="reg_year" value="{{ old('reg_year', ((Session::has('vehicle.reg_year'))? Session::get('vehicle.reg_year'): '' ) )  }}" >
                @if($errors->first('reg_year'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('reg_year') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="seats">Number of seats</label>
                <input type="text" placeholder="Number of seats" name="number_seats" value="{{ old('number_seats', ((Session::has('vehicle.number_seats'))? Session::get('vehicle.number_seats'): '' ) )  }}" >
                @if($errors->first('number_seats'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('number_seats') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="mileage">Estimated annual mileage</label>
                <select name="mileage" id="annual_mileage">
                    <option value="0">0 to 4,999</option>
                    <option value="1">5,000 to 9,999</option>
                    <option value="2">10,000 to 14,999</option>
                    <option value="3">15,000 to 19,999</option>
                    <option value="4">20,000 to 24,999</option>
                    <option value="5">25000 or more</option>
                </select>

            </div>

            <div class="form-group">
                <label for="value">Current Value(£)</label>
                <input type="text" placeholder="Current Value" name="current_value" value="{{ old('current_value', ((Session::has('vehicle.current_value'))? Session::get('vehicle.current_value'): '' ) )  }}" >
                @if($errors->first('current_value'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('current_value') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="driver name ">Main driver name</label>
                <input type="text" placeholder="Main driver name" name="main_driver" value="{{ old('main_driver', ((Session::has('vehicle.main_driver'))? Session::get('vehicle.main_driver'): '' ) )  }}">
                @if($errors->first('main_driver'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('main_driver') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="other drivers">Number of other drivers</label>
                <select name="other drivers" id="other_drivers">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>


            <button type="submit">Submit</button>
        </form>
    </div>





@endsection;