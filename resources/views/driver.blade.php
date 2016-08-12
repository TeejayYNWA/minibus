@extends('layout.layout')

@section('title', 'Driver Info')

@section('content')
    <h1>Enter driver info here</h1>

    <div class="panel">
        <form class="form" method="post" action="/driverInfo" >

            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title </label>
                {!! Form::select('title', $titles, old('title', (isset($driver['title'])) ? $driver['title'] : null ) ) !!}
            </div>

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" placeholder="First Name" name="first_name" value="{{ old('first_name',($driver['first_name'] ?? null))  }}">
                @if($errors->first('first_name'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('first_name') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>


            <div class="form-group">
                <label for="initial">Initial</label>
                <input type="text" placeholder="Initial" name="initial" value="{{ old('initial', ($driver['initial'] ?? null))  }}">
                @if($errors->first('initial'))
                    <ul class="alert-danger">
                        @foreach ($errors->get('initial') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="form-group">
                <label for="address">Surname</label>
                <input type="text" placeholder="Surname" name="surname" value="{{ old('surname', ($driver['surname'] ?? null))  }}">
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
                <input type="date" placeholder="dd-mm-yyyy" name="dob" value="{{ old('dob', ($driver['dob'] ?? null))   }}" >
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
                <input type="text" placeholder="Occupation" name="occupation" value="{{ old('occupation', ($driver['occupation'] ?? null))   }}">
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
                <input type="text" placeholder="Relationship" name="relation_to_proposer" value="{{ old('relation_to_proposer',($driver['relation_to_proposer'] ?? null))  }}">
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
                {!! Form::select('licence_held', $licenceHeld, old('licence_held', ($driver['$licenceHeld'] ?? null))) !!}
            </div>


            {{ Form::hidden('id', old('id', ($driver['id'] ?? null ) ) ) }}
            <button type="submit">Submit</button>
            <a href="/drivers" class="btn btn-danger btn-sm">Return</a>
        </form>
    </div>

@endsection