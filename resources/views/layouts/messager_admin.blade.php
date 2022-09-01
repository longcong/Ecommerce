@if (Session()->has('success'))

    <div class="alert alert-success" role="alert">
        {{ Session::get('success')}}
    </div>
@elseif (Session()->has('errors'))
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
@endif


