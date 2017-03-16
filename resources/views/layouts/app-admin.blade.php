<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body id="admin-panel" class="background-dark">
<div id="app" class="container">
    <nav class="col-sm-3">
        <ul class="nav">
            <li>{{ link_to_action('AdminController@index', 'Dashboard') }}</li>
            <li>{{ link_to_action('AdminController@indexArticles', 'Articles') }}</li>
        </ul>
    </nav>
    <main class="col-sm-9">
        @yield('content')
    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>