@if ($errors->any())
    <div class="section section--default">
        <div class="container">
            <div class="block notice notice--danger">
                <ul class="list list--reset">
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
