@extends('layout.app')

@section('content')

    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if($user['image'])
                        Are You sure to delete image
                    @else
                        Are You sure to update image
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    @if($user['image'])
                        <button type="button" class="btn btn-danger" onclick="deleteImage()">Delete Image</button>
                    @else
                        <button type="button" class="btn btn-primary" onclick="editImage()">Edit Image</button>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 50px; margin-bottom: 100px">

        <form id="changeImage" enctype="multipart/form-data">
            @csrf
            {{method_field('POST')}}
            <input type="hidden" name="id" value="{{$user['id']}}">
            @if($user["image"])
                <div class="card" style="width: 30%">
                    <img src="{{asset('/storage/images/'.$user['image'])}}"
                         class="card-img-top"
                         data-toggle="modal" data-target="#confirmModal"
                         width="50" height="150" name="image">
                    <div class="card-body">
                        <h5 class="card-title">{{$user["name"]}}</h5>
                        <a href="{{route('users.index')}}" class="btn btn-warning"> Back </a>
                    </div>
                </div>
                {{--<input type="hidden" name="image" value="{{$user['image']}}">--}}
            @else
                <div class="card" style="width: 30%">
                    <img src="{{asset('/storage/images/avatar.png')}}"
                         class="card-img-top"
                         data-toggle="modal" data-target="#confirmModal"
                         width="50" height="150" name="image">
                    <div class="card-body">
                        <h5 class="card-title">{{$user["name"]}}</h5>
                        <a href="{{route('users.index')}}" class="btn btn-warning"> Back </a>
                    </div>
                </div>
            @endif


        </form>

    </div>

@endsection
@section('js')
    <script>
        // $(document).ready(function (e) {
        //     alert('working');
        // })

        function deleteImage() {

            $('#confirmModal').modal('hide');
            var formData = new FormData(document.getElementById('changeImage'));
            formData.set('_method', 'PATCH');
            // for(var pair of formData.entries()) {
            //     console.log(pair[0]+ ', '+ pair[1]);
            // }

            $.ajax({

                url: '{{route('users.update',$user['id'])}}',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function (responce) {
                    console.log(responce);
                }

            });
        }

        function editImage() {
            alert('working')
        }
    </script>
@endsection