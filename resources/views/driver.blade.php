@extends('layout.layout')

@section('title', 'Driver Info')

@section('content')
    <h1>Enter driver info here</h1>

    <div class="panel">
        <form class="form" method="post" action="/driverInfo">


            <div class="row">
                <div class="col-md-12">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="title">Title </label>
                            </div>
                            <div class="col-md-4">
                                {!! Form::select('title', $titles, old('title', (isset($driver['title'])) ? $driver['title'] : null ) ) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="firstname">First Name</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="First Name" name="first_name"
                                       value="{{ old('first_name',($driver['first_name'] ?? null))  }}">
                                @if($errors->first('first_name'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('first_name') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="initial">Initial</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Initial" name="initial"
                                       value="{{ old('initial', ($driver['initial'] ?? null))  }}">
                                @if($errors->first('initial'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('initial') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="address">Surname</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Surname" name="surname"
                                       value="{{ old('surname', ($driver['surname'] ?? null))  }}">
                                @if($errors->first('surname'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('surname') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="dob">Date of Birth</label>
                            </div>
                            <div class="col-md-4">
                                <input type="date" placeholder="dd-mm-yyyy" name="dob"
                                       value="{{ old('dob', ($driver['dob'] ?? null))   }}">
                                @if($errors->first('dob'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('dob') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="occupation">Occupation</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Occupation" name="occupation"
                                       value="{{ old('occupation', ($driver['occupation'] ?? null))   }}">
                                @if($errors->first('occupation'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('occupation') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="relationship">Relationship to proposer</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Relationship" name="relation_to_proposer"
                                       value="{{ old('relation_to_proposer',($driver['relation_to_proposer'] ?? null))  }}">
                                @if($errors->first('relation_to_proposer'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('relation_to_proposer') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="licence held">Years Licence Held</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::select('licence_held', $licenceHeld, old('licence_held', (isset($driver['licence_held'])) ? $driver['licence_held'] : null ) ) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{ Form::hidden('id', old('id', ($driver['id'] ?? null ))) }}
                <button type="submit">Submit</button>
                <a href="/drivers" class="btn btn-danger btn-sm">Return</a>
        </form>
</div>


@endsection