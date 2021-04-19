@extends('layout.app')

@section('css')
    <style>
        .lab {
            font-size: 16px;
        }

        .terms:hover {
            cursor: pointer;
        }

        .loader{
            display:none;
        }
    </style>
@endsection



@section('content')

    {{--agreement modal--}}
    <div class="modal" tabindex="-1" id="agreement">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms And Condition</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" style="color:white">Accept</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{--agremment modal--}}

    <p style="padding-top:10px;padding-left:10px;"> Already a member?
        <span>  <a href="#" style="color:#ff8533"> click here to login. </a> </span> <br>
    </p>

    <h2 style="padding-left:10px;"> User Registration </h2>

    <div class="row">
        <div class="col-md-8 col-sm-12">
            <form id="registration_form">
                @csrf
                <div class="card" style="border:none">
                    <h4 class="card-header" style="background: white; border:none">Personal Details</h4>
                    <div style="background:#f6f6f6">
                        <div class="form-group row" style="margin-top:10px">
                            <label class="col-md-3 col-sm-2 col-form-label text-right lab">
                                First Name*
                            </label>
                            <div class="col-md-5 col-sm-8">
                                <input type="text" class="form-control"
                                       style="border:1px solid black; border-radius: 0px"
                                       name="first_name">
                            </div>
                            <label class="col-md-4 col-sm-2 col-form-label text-danger" id="first_name"
                                   style="font-size:16px">

                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-sm-2 text-right col-form-label lab">
                                Last Name*
                            </label>
                            <div class="col-md-5 col-sm-8">
                                <input type="text" class="form-control"
                                       style="border:1px solid black; border-radius: 0px"
                                       name="last_name">
                            </div>
                            <label class="col-md-4 col-sm-2 col-form-label text-danger" id="last_name"
                                   style="font-size:16px">

                            </label>
                        </div>
                    </div>
                </div>
                <div class="card" style="border:none">
                    <h4 class="card-header" style="background: white; border:none">Account Information</h4>
                    <div style="background:#f6f6f6">
                        <div class="form-group row" style="margin-top:10px">
                            <label class="col-md-3 col-sm-2 col-form-label text-right lab">Email*</label>
                            <div class="col-md-5 col-sm-8">
                                <input type="text" class="form-control"
                                       style="border:1px solid black; border-radius: 0px" name="email">
                            </div>
                            <label class="col-md-4 col-sm-2 col-form-label text-danger" id="email"
                                   style="font-size:16px">

                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-sm-2 col-form-label text-right lab">Password*</label>
                            <div class="col-md-5 col-sm-8">
                                <input type="password" class="form-control"
                                       style="border:1px solid black; border-radius: 0px"
                                       name="password">
                            </div>
                            <label class="col-md-4 col-sm-2 col-form-label text-danger" id="password"
                                   style="font-size:16px">

                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3   col-sm-2 col-form-label text-right lab">Confirm Password*</label>
                            <div class="col-md-5 col-sm-8">
                                <input type="password" class="form-control"
                                       style="border:1px solid black; border-radius: 0px"
                                       name="password_confirmation">
                            </div>
                            <label class="col-md-4 col-sm-2 col-form-label text-danger" id="confirm_password"
                                   style="font-size:16px">

                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-sm-2 col-form-label text-right lab">Security Question*</label>
                            <div class="col-md-5 col-sm-8">
                                <select class="form-control"
                                        style="border:1px solid black; border-radius: 0px"
                                        name="security_question">
                                    <option value="default">Choose...</option>
                                    <option>What is your favourite pet name?</option>
                                    <option>who is your favourite book writer?</option>
                                    <option>What is your favourite board game?</option>
                                </select>
                            </div>
                            <label class="col-md-4 col-sm-2 col-form-label text-danger" id="security_question"
                                   style="font-size:16px">
                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3   col-sm-2 col-form-label text-right lab">Secrete Answer*</label>
                            <div class="col-md-5 col-sm-8">
                                <input type="text" name="secrete_answer" class="form-control"
                                       style="border:1px solid black; border-radius: 0px">
                            </div>
                            <label class="col-md-4 col-sm-2 col-form-label text-danger" id="secrete_answer"
                                   style="font-size:16px">

                            </label>
                        </div>
                    </div>

                </div>
                <div class="card" style="border:none">
                    <h4 class="card-header" style="background: white; border:none">User Verification</h4>
                    <div style="background:#f6f6f6">
                        <div class="form-group form-check col-md-12 offset-md-1" style="margin-top:10px">
                            <input type="checkbox" class="form-check-input" onchange="agreement()" id="exampleCheck1">
                            <label class="form-check-label lab">
                                I have read and accept terms and conditions
                                <label onclick="agreement()" class="text-warning terms"> Terms And Conditions </label>
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark" id="store" style="margin-top: 10px"> Register</button>
            </form>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="card text-center" style="border:none; padding:0">
                <div class="card-header" style="border:none; background:white; padding:0">
                    My Property
                </div>
                <div class="card-body" style="border:none; padding:0">
                    <div style="padding-top:10px;">
                        <img style="height:100px; width:150px;"
                             src="{{url('/images/payment.jpg')}}"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="card-footer text-muted" style="border:none; background:white; padding:0">
                    <strong>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </strong>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('register.for')}}" class="btn btn-secondary" style="color:white">Select Another</a>
                </div>
            </div>

            <div class="card text-center" style="border:none">

                <div class="card-body" style="border:none">
                    <div style="margin-top:50px;">
                        <div class="loader">
                            <img src="{{url('images/Spinner-1s-200px.gif')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')

    <script>
        $('#registration_form').submit(function (e) {
            e.preventDefault();
            formData = new FormData(this);

            $.ajax({
                url: '{{route('submit.registration.form')}}',
                method: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                datatype: 'json',
                beforeSend: function(){
                    $('.loader').show()
                },
                success: function (data) {
                    if (data.errors) {
                        $.each(data.errors, function (key, value) {

                            // console.log($('#' + key));
                            $('#' + key).addClass('is_invalid').html(value)
                            // $('#' + key).html(value)

                            $('.loader').hide();
                        });
                    }
                    if (data.success) {
                        $('#registration_form').find('.is_invalid').html('')
                        // alert(data.success)

                    }
                    $('.loader').hide();
                },
                error: function (jqxhr, status, exception) {
                    alert('Exception:', jqxhr);
                }
            });
        });

        function agreement() {
            $('#modal-title').text('Add Course Assessment');
            $('#agreement').modal('show');
        }
    </script>

@stop

{{--// for (var pair of formData.entries()) {--}}
{{--//     console.log(pair[0] + ', ' + pair[1]);--}}
{{--// }--}}


{{--$('#course_assessment_modal form').find('.invalid-feedback').remove();--}}
{{--$('#course_assessment_modal form').find('.form-control').removeClass('is-invalid');--}}
{{--if (data.errors) {--}}
{{--$.each(data.errors, function (key, value) {--}}
{{--$('#' + key)--}}
{{--.addClass('is-invalid')--}}
{{--.after('<div class="invalid-feedback text-"><strong>'--}}
{{--+ value +--}}
{{--'</strong></div>');--}}
{{--});--}}
{{--}--}}
{{--if (data.success) {--}}
{{--$('#course_assessment_form')[0].reset();--}}
{{--$('#course_assessment_modal').modal('hide');--}}
{{--html = '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>' + data.success + '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';--}}
{{--$('#message').html(html);--}}
{{--$('#course_assessment').DataTable().ajax.reload();--}}
{{--}--}}