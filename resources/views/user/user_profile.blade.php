@extends('layout.app')

@section('content')

    <form action="javascript:void(0)" method="post" id="userprofile" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" id="save" class="btn btn-primary">Submit</button>
        <a href="{{route('users.index')}}" class="btn btn-warning"> Back </a>
    </form>




@endsection
@section('js')
    <script>
        $('#save').click(function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById('userprofile'));

            // for(var pair of formData.entries()) {
            //  console.log(pair[0]+ ', '+ pair[1]);
            // }
            // var files = $('#sys_attach_file_name')[0].files;
            // formData.append('sys_attach_file_name', files[0])


            // console.log(files[0])

            $.ajax({
                url: '{{route('users.store')}}',
                cache: false,
                type: "POST",
                dataType: "text",
                contentType: false,
                processData: false,
                data: formData,
                success: function(response)
                {
                    window.location.href = "{{route('users.index')}}";
                    // if(response === 200)
                    // {
                    //
                    // }
                }
            });

        })
    </script>
@endsection