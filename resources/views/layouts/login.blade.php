<!doctype html>
<html lang="ru">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="../../css/admin/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../css/admin/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">

        @yield('content')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
