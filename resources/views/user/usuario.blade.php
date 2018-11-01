<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>

     <main class="py-4">
            @yield('content')
        </main>

@include('footer')

</body>
</html>
