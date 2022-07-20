@if (Session()->has('success'))

    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{ Session::get('success')}}
    </div>
@elseif (Session()->has('errors'))
    <div class="alert alert-danger" role="alert">
         @foreach($errors->all() as $error)
         <strong>Errors: </strong>{{ $error }} <br>
        @endforeach
    </div>
@endif


