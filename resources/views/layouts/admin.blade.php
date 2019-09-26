<!doctype html>
<html lang="ru">
<head>
    @include('includes.head')
    <link href="../../css/admin/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../css/admin/sb-admin.css" rel="stylesheet">
</head>

<body id="page-top">

        @include('includes.admin.navbar')

  <div id="wrapper">

        @include('includes.admin.navbar2')

        <div id="content-wrapper">

        @yield('content')

        @include('includes.admin.footer')

        </div>

  </div>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
