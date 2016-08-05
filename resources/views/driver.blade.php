@extends('layout.layout')

@section('title', 'Driver Info')

@section('content')

    <h1>Enter driver info here</h1>

    <div class="panel">
        <form class="form" method="post" action="/driverInfo">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" placeholder="Title" name="title" >
            </div>

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" placeholder="First Name" name="first_name" >
            </div>

            <div class="form-group">
                <label for="intitial">Initial</label>
                <input type="text" placeholder="Initial" name="intial" >
            </div>

            <div class="form-group">
                <label for="address">Surname</label>
                <input type="text" placeholder="Surname" name="surname" >
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" placeholder="dd-mm-yyyy" name="dob" >
            </div>

            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" placeholder="Occupation" name="occupation" >
            </div>

            <div class="form-group">
                <label for="relationship">Relationship to proposer</label>
                <input type="text" placeholder="Relationship" name="relationship_to_propser" >
            </div>

            <div class="form-group">
                <label for="licence held">Licence Held</label>
                <input type="text" placeholder="Licence Held" name="licence_held" >
            </div>


            <button type="submit">Submit</button>
        </form>
    </div>

@endsection