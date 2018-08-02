@extends('layouts.base')

@section('content')
	<section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"> 
                <ul class="row">
                    <li class="col-sm-12">
                        <label>First Name
                            <input type="text" class="form-control" name="first_name" value="{{ $details[0]->first_name}}" disabled>
                        </label>
                    </li>

                    <li class="col-sm-12">
                        <label>Last Name
                            <input type="text" class="form-control" name="last_name" value="{{ $details[0]->last_name}}" disabled>
                        </label>
                    </li>

                    <li class="col-sm-12">
                        <label>Email
                            <input type="text" class="form-control" name="email" value="{{ $details[0]->email}}" disabled>
                        </label>
                    </li>

                    <li class="col-sm-12">
                        <label>Phone Number
                            <input type="text" class="form-control" name="phone_number" value="{{ $details[0]->phone}}" disabled>
                        </label>
                    </li>

                    <li class="col-sm-12">
                        <label>Address
                            <input type="text" class="form-control" name="address" value="{{ $details[0]->address}}" disabled>
                        </label>
                    </li>

                    <li class="col-sm-12">
                        <label>City
                            <input type="text" class="form-control" name="city" value="{{ $details[0]->city }}" disabled>
                        </label>
                    </li>
                
                    <!-- <li class="col-sm-12 text-center">
                        <button type="submit" class="btn-round">Update</button>
                    </li> -->
                </ul>
            </div>
            <div class="col-md-2"></div>
        </div>
      </div>
    </section>
@endsection