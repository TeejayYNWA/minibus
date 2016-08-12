@extends('layout.layout')

@section('title', 'Driver Info')

@section('content')

    <?php
    $titles = ['Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms','Miss'=>'Miss','Dr'=>'Dr','Rev'=>'Rev','Prof'=>'Prof'];
    $licenceHeld = ['0'=>'0 to 12 months','12'=>'1 Year','24'=>'2 Years','36'=>'3 Years','48'=>'4 Years','60'=>'5 Years','72'=>'5 or more Years']
    ?>

    {{-- dump($errors) --}}
    <h1>Enter driver info here</h1>

    <div class="panel">
        <form class="form" method="post" action="/driverInfo" >

            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title </label>
                {!! Form::select('title', $titles, old('title', (session()->has('driver.title')) ? session('driver.title') : null ) ) !!}
            </div>

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" placeholder="First Name" name="first_name" value="{{ old('first_name', ((Session::has('driver.first_name'))? Session::get('driver.first_name'): '' ) )  }}">
                @if($errors->first('first_name'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('first_name') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="intitial">Initial</label>
                <input type="text" placeholder="Initial" name="intial" value="{{ old('intial', ((Session::has('driver.intial'))? Session::get('driver.intial'): '' ) )  }}">
                @if($errors->first('intial'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('intial') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="address">Surname</label>
                <input type="text" placeholder="Surname" name="surname" value="{{ old('surname', ((Session::has('driver.surname'))? Session::get('driver.surname'): '' ) )  }}">
                @if($errors->first('surname'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('surname') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" placeholder="dd-mm-yyyy" name="dob" value="{{ old('dob', ((Session::has('driver.dob'))? Session::get('driver.dob'): '' ) )  }}" >
                @if($errors->first('dob'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('dob') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" placeholder="Occupation" name="occupation" value="{{ old('occupation', ((Session::has('driver.occupation'))? Session::get('driver.occupation'): '' ) )  }}">
                @if($errors->first('occupation'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('occupation') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="relationship">Relationship to proposer</label>
                <input type="text" placeholder="Relationship" name="relation_to_proposer" value="{{ old('relation_to_proposer', ((Session::has('driver.relation_to_proposer'))? Session::get('driver.relation_to_proposer'): '' ) )  }}">
                @if($errors->first('relation_to_proposer'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('relation_to_proposer') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="licence held">Years Licence Held</label>
                {!! Form::select('licence_held', $licenceHeld, old('licence_held', (session()->has('driver.licence_held')) ? session('driver.licence_held') : null ) ) !!}
            </div>


            <button type="submit">Submit</button>
        </form>
    </div>

@endsection