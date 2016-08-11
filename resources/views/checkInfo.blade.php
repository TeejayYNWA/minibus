@extends('layout.layout')

@section('title', 'Vehicle Info')

@section('content')

    <h1>Check Info</h1>

    <?php

    //dump( Session::all() );

    function fix_title($string)
    {
        $title = str_replace("_", " ", $string);
        return ucfirst($title);
    }


    $info = Session::all();
    ?>

    <div>
        <h2>Company Info</h2>
        <a href="/company">edit</a>

        <table class="table">
            <tbody>

            @foreach($info['company'] as $key => $companyInfo )

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
        <a href="/driver">edit</a>
        <table class="table">
            <tbody>
            @foreach($info['driver'] as $key => $driverInfo )

                <tr>
                    <td>{{ fix_title($key) }}</td>
                    <td>{{ $driverInfo }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <h2>Vehicle Info</h2>
        <a href="/vehicle">edit</a>

        <table class="table">
            <tbody>
                @foreach($info['vehicle'] as $key => $vehicleInfo )
                    <tr>
                        <td>{{ fix_title($key) }}</td>
                        <td>{{ $vehicleInfo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>

    <button class="btn-group-lg" href="/quote">GET QUOTES</button>

@endsection


