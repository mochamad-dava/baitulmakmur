<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/icon_logo_1.png" width="50" height="50" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kuttab Baitul Makmur | {{ $tittle }}</title>
  </head>
  <body>
  
    @include('partials.navbar')

    {{-- Container --}}
    <div class="container mt-4">
        @yield('container')
    </div>

    <div class="container mt-4">
      @yield('container1')
    </div>

    <div class="container mt-4">
      @yield('container2')
    </div>

    <div class="container mt-4">
      @yield('container3')
    </div>

    <div class="container mt-4">
      @yield('container4')
    </div>

    {{-- Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @include('partials.footer')

  </body>
</html>