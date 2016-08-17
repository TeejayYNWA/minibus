@extends('layout.layout')

@section('title', 'Vehicle Info')

@section('content')

    <h1>Check Info</h1>

    <?php

    function fix_title($string)
    {
        $title = str_replace("_", " ", $string);
        return ucfirst($title);
    }

    ?>

    <div>
        <h2>Company Info</h2>
        <a href="/company">edit</a>

        <table class="table">
            <tbody>

            @foreach($company as $key => $companyInfo )

                <tr>
                    <td>{{ fix_title($key) }}</td>
                    <td>{{ $companyInfo }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

    <div>
        <h2>Driver Info</h2>
        <a href="/drivers">edit</a>

        @foreach( $drivers as $key => $driverInfo )
            <table class="table">

                <thead>
                <tr>
                    <td>Driver {{$key}}</td>
                </tr>
                </thead>

                <tbody>
                @foreach($driverInfo as $title => $value)
                    <tr>
                        <td> {{ fix_title($title)}}</td>

                        <td>{{$value}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endforeach

    </div>

    <div>
        <h2>Vehicle Info</h2>
        <a href="/vehicles">edit</a>

            @foreach( $vehicles  as $key => $vehicleInfo )
                <table class="table">

                    <thead>
                    <tr>
                        <td>Vehicle {{$key}}</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($vehicleInfo as $title => $value)
                        <tr>
                            <td> {{ fix_title($title)}}</td>

                            <td>{{$value}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        @endforeach

    </div>

    <button class="btn btn-default btn-success" href="/quote">GET QUOTES</button>

@endsection


