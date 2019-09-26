<!doctype html>
<html lang="ru">
<head>
    @include('includes.head')
</head>

    @include('includes.loader')

<body class="top-header">

        @include('includes.header')

        @include('includes.navbar')

        @yield('content')

        @include('includes.footer')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
