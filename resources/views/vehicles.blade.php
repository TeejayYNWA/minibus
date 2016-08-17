@extends('layout.layout')

@section('title', 'Drivers Info')

@section('content')

    <h2>Vehicles</h2>
    <?php
    dump(session()->all());
    ?>

    <table class="table">
        <thead>
        <tr>
            <th>Model</th>
            <th>Registration</th>
            <th>Edit Vehicle</th>
            <th>Remove Vehicle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $key => $vehicle)
        <tr>
            <td>{{ ($vehicle['model']) }}</td>
            <td>{{ ($vehicle['reg_no']) }}</td>

            <td><a href="/vehicle/edit/{{$key}}" class="btn btn-default btn-primary">Edit</a></td>
            <td><a href="/vehicle/delete/{{$key}}" class="btn btn-default btn-danger">Remove</a></td>
        </tr>
        @endforeach

        </tbody>
    </table>
    <a class="btn btn-default btn-primary" href="/vehicle">Add Vehicle</a>
    <a href="/checkInfo" class="btn btn-default btn-success">Continue</a>







@endsection;