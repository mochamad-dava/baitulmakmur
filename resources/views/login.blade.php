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

  <body class="d-flex align-items-center py-5 bg-body-tertiary">
    <div class="container">
        <div class="col-md-4 md-3 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <main class="form-signin w-100 m-auto">
                        <form secttion="" method="POST">
                          @csrf
                          <img class="mb-4" src="../img/icon_logo_1.png" style="display:block; margin:auto;" alt=" Kuttab Baitul Makmur" width="75" height="75">
                          <h1 class="h3 mb-3 fw-normal text-center"> Login</h1>
                          @if ($errors->any())
                              <div class="alert alert-danger">
                                <ul>
                                  @foreach ($errors->all() as $item)
                                    <li>
                                      {{ $item }}
                                    </li>
                                  @endforeach
                                </ul>
                              </div>
                          @endif
                      
                          <div class="form-floating">
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                          </div><br>
                          <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                          </div>
                      
                          <div class="form-check text-start my-3">
                            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Remember me
                            </label>
                          </div>
                          <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                        </form>
                      </main>
                </div>
            </div>
            <a href="/">kembali</a>
        </div>
    </div>
{{-- Tampilan Login --}}

    {{-- Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>


