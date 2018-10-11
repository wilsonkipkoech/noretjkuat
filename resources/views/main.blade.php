<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
    @include('partials.nav')

    <div class="container">
        @yield('content')

    </div>
    <br>
   

    @include('partials.jav')
    
    @include('partials.footer')

</body>
</html>