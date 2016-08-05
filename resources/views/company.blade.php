@extends('layout.layout')

@section('title', 'Company Info')

@section('content')
    <h1>Enter company info here</h1>

<div class="panel">
    <form class="form" method="post" action="/companyInfo">

        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Company Name </label>
            <input type="text" placeholder="Name" name="company_name" >
        </div>

        <div class="form-group">
            <label for="contact">Contact Name</label>
            <input type="text" placeholder="Contact Name" name="contact_name" >
        </div>

        <div class="form-group">
            <label for="phonenumber">Company Telephone</label>
            <input type="text" placeholder="Telephone" name="contact_number" >
        </div>

        <div class="form-group">
            <label for="address">Company Address</label>
            <input type="text" placeholder="Address" name="company_address" >
        </div>

        <div class="form-group">
            <label for="postcode">Company Postcode</label>
            <input type="text" placeholder="Postcode" name="company_postcode" >
        </div>

        <div class="form-group">
            <label for="businesstype">Business Type</label>
            <input type="text" placeholder="Business Type" name="business_type" >
        </div>


        <button type="submit">Submit</button>
    </form>
</div>

@endsection