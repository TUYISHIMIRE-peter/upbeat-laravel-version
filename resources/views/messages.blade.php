@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>success</strong>
        <span>{{ Session::get('success') }}</span>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-error" role="alert">
        <strong>error</strong>
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
