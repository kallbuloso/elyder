@if (Session::has('sweet_alert.alert'))
    <script>
        @if (Session::has('sweet_alert.content'))
            var config = {!! Session::pull('sweet_alert.alert') !!}
            var content = document.createElement('div');
            content.insertAdjacentHTML('afterbegin', config.content);
            config.content = content;
            swal(config);
        @else
            swal({!! Session::pull('sweet_alert.alert') !!});
        @endif
    </script>
@endif
{{-- @if (Session::has('sweet_alert.alert'))
    <script>
        swal({
            text: "{!! Session::get('sweet_alert.text') !!}",
            title: "{!! Session::get('sweet_alert.title') !!}",
            timer: {!! Session::get('sweet_alert.timer') !!},
            icon: "{!! Session::get('sweet_alert.type') !!}",
            buttons: "{!! Session::get('sweet_alert.buttons') !!}",

            // more options
        });
    </script>
@endif --}}
