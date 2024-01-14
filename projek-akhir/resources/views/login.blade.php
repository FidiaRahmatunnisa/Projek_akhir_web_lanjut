<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        body {
            background-image: url('/images/kalengU3.jpg');
            background-size: 100%;
        }
    </style>

  </head>
  <body class=" justify-content-center align-items-center bg-secondary" >

    <button class="btn btn-dark mx-2 my-3">
        <a href="/" class="text-light text-decoration-none">Home</a>
    </button>

    <div class="row justify-content-center my-5 ms-5 ">
        <div class="col-md-3">
            <div class="card bg-warning">
                <div class="card-header">
                    @error('email')
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror

                    <div class="container my-3 col-lg-11">
                        <h2 class="text-center">Login</h2>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Login</button>

                                    <button class="btn btn-primary">
                                        <a href="/daftar" class="text-light text-decoration-none">Daftar</a>
                                    </button>
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

      {{-- <footer class="bg-dark text-center text-light py-2 fixed-bottom">
        Copyright &copy; 2023 by Fidia Rahmatunnisa
      </footer> --}}

    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
