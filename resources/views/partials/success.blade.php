@if (session('success'))
    <div class="section section--default">
        <div class="container">
            <div class="block notice notice--success">
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif
