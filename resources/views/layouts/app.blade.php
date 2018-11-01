<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

<body style="margin: 0;">

     <main class="py-4">
            @yield('content')
        </main>

@include('footer')

</body>
</html>
