@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
        <div class="mv-xsm">
            <div class="container">
                <div class="notice notice--{{ $msg }}">
                    {!! Session::get('alert-' . $msg) !!}
                </div>
            </div>
        </div>
    @endif
@endforeach
