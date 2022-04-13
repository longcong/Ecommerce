<!DOCTYPE html>
<html lang="en">

    <head>
    @include('main._head')
    </head>

    <body>
        <div class="container-fluid">
        @include('main._topbar')
        </div>

        <div class="container-fluid mb-5">
            @include('main._nav')
        </div>
        <div class="container-fluid pt-5">
            @include('main._featured')
        </div>
        <div class="container-fluid pt-5">
            @include('main._categories')
        </div>
        <div class="container-fluid offer pt-5">
            @include('main._offer')
        </div>
        <div class="container-fluid pt-5">
            @include('main._productstop')
        </div>
        <div class="container-fluid pt-5">
            @include('main._subscribe')
        </div>
        <div class="container-fluid pt-5">
            @include('main._productdown')
        </div>
        <div class="container-fluid pt-5">
            @include('main._vendor')
        </div>

        @yield('content')
        
        <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
            @include('main._footer')
        </div>
            @include('main._javascript')

            @yield('scripts')
    </body>

</html>