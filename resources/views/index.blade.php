@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <h4 style="padding: 10px"> Welcome To Resident Service </h4>
            <form style="background:#f6f6f6; padding:10px;">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Sign In</button>
                    <small class="form-text" style="color:#ff8533">Forgot Password?</small>
                    <small class="form-text" style="color:#ff8533">Click here to register</small>
                    <small class="form-text" style="color:#ff8533">Send Verification Email</small>
                </div>
            </form>
        </div>

        <div class="col-8 col-md-8 col-sm-8">
            <div class="row" style="margin-top:75px;">
                <div class="col-4 col-md-4 col-sm-4">
                    <div style="padding-left:10px; padding-top:10px; padding-bottom:10px;">
                        <img style="height:50px; width:70px; float:right"
                             src="{{url('/images/payment.jpg')}}"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-8 col-md-8 col-sm-8" style="padding-top:10px; padding-bottom:10px">
                    <h5> Make Payments </h5>
                    <small> pay online,check status of your payments and review your payment history</small>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-md-4 col-sm-4">
                    <div style="padding-left:10px; padding-top:10px; padding-bottom:10px;">
                        <img style="height:50px; width:70px; float:right"
                             src="{{url('/images/setting.png')}}"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-8 col-md-8 col-sm-8" style="padding-top:10px; padding-bottom:10px">
                    <h5> Make Payments </h5>
                    <small> pay online,check status of your payments and review your payment history</small>
                </div>
            </div>

            <div class="row">
                <div class="col-4 col-md-4 col-sm-4 offset-md-4 offset-sm-4">
                    <input type="image" class="apple" src="{{url('/images/play_store.png')}}" width="100" height="40">
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-md-4 col-sm-4 offset-md-4 offset-sm-4">
                    <input type="image" class="apple" src="{{url('/images/play_store.png')}}" width="100" height="40">
                </div>
            </div>
        </div>
    </div>

@endsection