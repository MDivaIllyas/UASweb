<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/style.css">

    <title>Amazing E-Book</title>
  </head>
  <body>

    @if (!Auth::check())
    @include('navbar')
    @else
    @if (Auth::user()->role_id == '1')
    @include('navbar3')
    @else
    @include('navbar2')
    @endif
    @endif

    <div class="container mt-2">
        @yield('body')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <nav class="navbar fixed-bottom navbar-light bg-info mt-5">
    <div class="container-fluid align-self-center">
      <footer class="body5 mx-auto">© Amazing E-Book 2022</footer>
    </div>
  </nav>

  </body>
</html>