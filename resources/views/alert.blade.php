@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (Session::has('error'))

<div class="btn btn-danger" >

    {{ Session::get('error') }}

</div>
@endif

@if (Session::has('success'))
<div class="btn btn-success" >
    {{ Session::get('success') }}

</div>
@endif
