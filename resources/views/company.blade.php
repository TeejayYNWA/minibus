@extends('layout.layout')

@section('title', 'Company Info')

@section('content')


    <h1 id="header">Enter company info here</h1>

    <div class="panel" id="companyPanel">
        <form class="form" method="post" action="/companyInfo">

            <div class="row">
                <div class="col-md-12">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="name">Company Name </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Name" name="company_name"
                                       value="{{ old('company_name', ((Session::has('company.company_name'))? Session::get('company.company_name'): '' ) )  }}">
                                @if($errors->first('company_name'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('company_name') as $message)
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
                                <label for="contact">Contact Name</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Contact Name" name="contact_name"
                                       value="{{ old('contact_name', ((Session::has('company.contact_name'))? Session::get('company.contact_name'): '' ) )  }}">
                                @if($errors->first('contact_name'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('contact_name') as $message)
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
                                <label for="phonenumber">Company Telephone</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Telephone" name="contact_number"
                                       value="{{ old('contact_number', ((Session::has('company.contact_number'))? Session::get('company.contact_number'): '' ) )  }}">
                                @if($errors->first('contact_number'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('contact_number') as $message)
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
                                <label for="address">Company Address</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Address" name="company_address"
                                       value="{{ old('company_address', ((Session::has('company.company_address'))? Session::get('company.company_address'): '' ) )  }}">
                                @if($errors->first('company_address'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('company_address') as $message)
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
                                <label for="postcode">Company Postcode</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Postcode" name="company_postcode"
                                       value="{{ old('company_postcode', ((Session::has('company.company_postcode'))? Session::get('company.company_postcode'): '' ) )  }}">
                                @if($errors->first('company_postcode'))
                                    <ul class="alert-danger">
                                        @foreach ($errors->get('company_postcode') as $message)
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
                            <label for="businesstype">Business Type</label>
                                </div>
                            <div class="col-md-4">
                            <input type="text" placeholder="Business Type" name="business_type"
                                   value="{{ old('business_type', ((Session::has('company.business_type'))? Session::get('company.business_type'): '' ) )  }}">
                            @if($errors->first('business_type'))
                                <ul class="alert-danger">
                                    @foreach ($errors->get('business_type') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif
                                </div>
                        </div>
                    </div>
                </div>
            </div>


            <button type="submit">Submit</button>


        </form>
    </div>

@endsection