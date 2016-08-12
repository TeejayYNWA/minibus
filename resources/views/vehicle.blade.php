@extends('layout.layout')

@section('title', 'Vehicle Info')

@section('content')
    {{-- dump($errors) --}}
    <h1>Enter vehicle info here</h1>
    <?php
            $annualMileage = ['5000'=>'5000','10000'=> '10000','15000'=> '15000','20000'=>'20000','25000'=>'25000','30000'=>'30000'];
            $otherDrivers = [0,1,2,3,4,5];


    ?>

    <div class="panel">
            {!! Form::open(['class' => 'form', 'url' => '/vehicleInfo']) !!}

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
                {!! Form::select('annual_mileage', $annualMileage, old('annual_mileage', (session()->has('vehicle.annual_mileage')) ? session('vehicle.annual_mileage') : null ) ) !!}
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
                {!! Form::select('main_driver', $drivers, old('main_driver', (session()->has('vehicle.main_driver')) ? session('vehicle.main_driver') : null ) ) !!}

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
                {!! Form::select('other_drivers', $otherDrivers, old('other_drivers', (session()->has('vehicle.other_drivers')) ? session('vehicle.other_drivers') : null ) ) !!}
            </div>


            <button type="submit">Submit</button>
        {!! Form::close() !!}
    </div>





@endsection;