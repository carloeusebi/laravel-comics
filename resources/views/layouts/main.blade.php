<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Comics</title>
  <link href="{{ Vite::asset('resources/img/favicon.ico') }}" rel="icon" type="image/ico">
  <script defer src="{{ Vite::asset('resources/js/app.js')}}" type="module"></script>

  @yield('scss')

  {{-- To hide html before scss gets compiled --}}
<style>
  body{
    display: none;
  }
</style>
</head>
<body>

  @include('../partials/header')
  @include('../partials/jumbo')

  <main>
    @yield('main-content')
  </main>

  @include('../partials/footer')
</body>
</html>