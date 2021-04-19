@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-12" style="padding-top:5px">
            <button class="btn btn-secondary btn-block"> User Login</button>
        </div>
    </div>

    <div class="row">
        <div class="col-12" style="padding: 5px;">
            <h4> Welcome To Resident Service </h4>
            <p> To start, we need to locate your apartment community. Please enter the postal code or name of your
                apartment community below:</p>
        </div>
    </div>

    <div class="row">
        <div class=" col-md-5">
            <form style="background:#DCDCDC; padding:10px;">
                <div class="form-group">
                    <label>ENTER YOUR ZIP CODE</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="zip" placeholder="Zip Code">
                        <div class="input-group-prepend">
                            <button class="btn btn-dark"> Search</button>
                        </div>
                    </div>
                    <div id="zipList">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-5 offset-md-2">
            <form style="background:#DCDCDC; padding:10px;">
                {{csrf_field()}}
                <div class="form-group">
                    <label>SELECT YOUR APARTMENT COMMUNITY</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="property" placeholder="Property Name">
                        <div class="input-group-prepend">
                            <button class="btn btn-dark"> Search</button>
                        </div>
                    </div>
                    <div id="apartmentList">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12" style="padding: 5px;">
            <h4> Search Results </h4>
        </div>
    </div>

    <div class="row" id="search-result">
        <div class="col-md-3 col-sm-6">
            <div class="row">
                <div class="col-md-12">
                    <div style="padding-top:10px;">
                        <img style="height:100px; width:150px; float:left"
                             src="{{url('/images/payment.jpg')}}"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-12">
                    <div style="margin-top: 10px">
                        1 Properties Found
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 5px;">
            Bedroom: <br>
            2 - 3 <br>
            Bath: <br>
            2.0 - 2.00
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 5px;">
            <strong>Centennial Park Arbors Addition</strong> <br>
            500 East Centennial Drive <br>
            Oak Creek, WI 53154 <br>
            (414) 800-8278
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 5px;">
            <a href="{{route('registration.form')}}" class="btn btn-dark float-right" style="color:white">
                Select This Property
            </a>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#search-result').hide();


        });

        $('#zip').keyup(function () {

            var html = '<ul class="list-group" id="zip_list">\n' +
                '<li class="list-group-item" onclick="zip_detail(111)">111</li>\n' +
                '<li class="list-group-item" onclick="zip_detail(222)">222</li>\n'+
                '<li class="list-group-item" onclick="zip_detail(333)" >333</li>\n' +
                '</ul>';
            $('#zipList').html(html);
        });

        $('#property').keyup(function () {
            var html = '<ul class="list-group">\n' +
                '<li class="list-group-item" onclick="apartment_detil(\'' + "lahore" + '\')">lahore</li>\n' +
                '<li class="list-group-item" onclick="apartment_detil(\'' + "karachi" + '\')">karachi</li>\n'+
                '<li class="list-group-item" onclick="apartment_detil(\''+ "dubai" +'\')">dubai</li>\n' +
                '</ul>';

            $('#apartmentList').html(html);
        });


        function zip_detail(val) {
            $('#zip').val(val);
            $('#zipList').hide();
            $('#search-result').show();
        }

        function apartment_detil(val) {
            $('#property').val(val);
            $('#apartmentList').hide();
            $('#search-result').show();
        }
    </script>


@stop