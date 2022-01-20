<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> - GBadmin</title>
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <x-admin.header></x-admin.header>
        <main class="main">
            @yield('header')
            @yield('content')
        </main>
        <footer class="footer">Подвал админ-панели</footer>
    </div>
<script src="{{ asset('admin/js/app.js') }}"></script>
</body>
</html>
