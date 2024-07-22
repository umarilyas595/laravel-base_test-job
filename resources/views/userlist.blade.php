@extends('layouts.app')
@section('page_content')

<div class="container">
    <div class="container">
        <div id="item-lists">
            @include('pre_user_result')
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function ()
        {
            $(document).on('click', '.pagination a', function (event)
            {
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                event.preventDefault();
                var myurl = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];
                getData(page);
            });
        });

        function getData(page) {
            $.ajax(
                    {
                        url: '?page=' + page,
                        type: "get",
                        datatype: "html"
                    })
                    .done(function (data)
                    {
                        $("#item-lists").empty().html(data);
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError)
                    {
                        alert('No response from server');
                    });
        }

        $(document).on('click', '.delete-user-info', function (e) {
            e.preventDefault();
            _url = $(this).attr('href');
            remove_row = $(this).parents('tr');

            $.ajax(
                    {
                        url: _url,
                        type: "get",
                        datatype: "html"
                    })
                    .done(function (data)
                    {
                        if (data.status == 'success') {
                            remove_row.css('background', '#b80606').fadeOut('slow');
                            _page = $("#item-lists .pagination li.active span").html();
                            getData(_page);
                        } else {
                            alert('not found');
                        }
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError)
                    {
                        alert('No response from server');
                    });

        });

    </script>
</div>

@endsection
