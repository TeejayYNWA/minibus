@extends('layout.layout')

@section('title', 'Drivers Info')

@section('content')
    <?php
    $messages = $errors;
            dump(Session::all());
    ?>

    <h2>Drivers</h2>

    <table class="table">
        <thead>
        <tr>
            <th>Driver Name</th>
            <th>Edit Info</th>
            <th>Remove Driver</th>
        </tr>
        </thead>
        <tbody>
        @foreach($drivers as $key => $driver)
            <tr>
                <td>{{ ($driver['first_name']) }}</td>

                <td>
                    <a href="/driver/edit/{{$key}}" class="btn-group-lg">Edit</a>
                </td>
                <td>
                    <a href="/driver/delete/{{$key}}" class="btn-group-lg">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <ul class="alert-danger">

        @foreach ($messages->all()  as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>

    <a class="btn btn-default" href="/driver">Add Driver</a>
    <a href="/drivers/validate" class="btn btn-default btn-success">Continue</a>



@endsection;