@extends('layout.app')

<style>
    a {
        color: deeppink;
    }
</style>

@section('content')

    <div class="form-group">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <label>ENTER COUNTRY NAME</label>
                <div class="form-group">
                    <input type="text" name="country_name" id="country_name" class="form-control input-lg"
                           placeholder="Enter Country Name"/>
                    <div id="countryList">
                    </div>
                </div>
                {{ csrf_field() }}
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>

        $('#country_name').keyup(function () {
            var query = $(this).val();

            if (query === '') {
                $('#countryList').hide();
            }

            if (query !== '') {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('autocomplete.fetch') }}",
                    method: "POST",
                    data: {query: query, _token: _token},
                    success: function (data) {
                        var h = data;

                        var html = '<ul class="list-group" id="country_list">\n';
                        $.each(h, function (i, v) {
                            html += '<a href="#" style="">' +
                                '<li class="list-group-item" value="' + v['id'] + '">' + v['name'] + '</li>' +
                                '</a>';
                        });

                        html += '</ul>';
                        $('#countryList').show();
                        $('#countryList').html(html);
                    }
                });
            }
        });

        $(document).on('click', 'li', function () {
            $('#country_name').val($(this).text());
            $('#countryList').hide();
        });
    </script>
@endsection