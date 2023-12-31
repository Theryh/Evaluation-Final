<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('appblade.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <title>@yield('title', 'Formation Laravel 10')</title>
</head>

<body>
    <h1></h1>
    <div class="dropdow-menu" aria-labelledby="navbarDropDown">
        <a href="{{ route('change-language', ['locale' => 'en']) }}">English</a>
        <a href="{{ route('change-language', ['locale' => 'fr']) }}">Français</a>

  <div class="container">
    <div class="container">

    </div>
    </form>

    @yield('content')

  </div>
</body>

</html>
