<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Qualls.IO is a Web development porfolio and resume site.">
    <meta name="keywords"
          content="Programming, Web development, Full Stack Developer, PHP, Javascript, CSS3, SCSS, MySql, Laravel, Eloquent"/>
    <meta name="author" content="Michael Qualls">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">

    <!-- Styles -->
    <link href="../../css/app.css" rel="stylesheet">

    @yield('css')

</head>
<body>

<main>
    @yield('content')
</main>

<footer>

</footer>

<!-- Scripts -->
<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery.waypoints.min.js"></script>
<script src="../../js/smooth-scroll.min.js"></script>
<script src="../../js/app.js"></script>


@yield('scripts')

</body>
</html>

