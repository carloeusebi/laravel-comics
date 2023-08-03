<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Comics</title>
  <link href="{{ Vite::asset('resources/img/favicon.ico') }}" rel="icon" type="image/ico">
  <script defer src="{{ Vite::asset('resources/js/app.js')}}" type="module"></script>
</head>
<body>

  @include('../partials/header')

  @yield('main-content')

  @include('../partials/footer')
</body>
</html>