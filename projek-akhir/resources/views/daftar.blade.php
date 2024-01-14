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
            background-size: 90%;
        }
    </style>

  </head>
  <body class=" justify-content-center align-items-center bg-secondary" >

    <button class="btn btn-dark mx-2 my-3">
        <a href="/" class="text-light text-decoration-none">Home</a>
    </button>

    <div class="row justify-content-end my-5 me-5 ">
        <div class="col-md-4">
            <div class="card bg-success">
                <div class="card-header">
                    <div class="container my-3 col-lg-11 text-light">
                        <h2 class="text-center ">Daftar</h2>
                            <form method="POST" action="/store">
                            @csrf
                                <div class="mb-3">
                                    <label for="id" class="form-label">Id</label>
                                    <input type="text" name="id" id="id" class="form-control" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Kirim</button>

                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

      <footer class="bg-dark text-light text-center fixed-bottom ">
        Copyright &copy; 2023 by Fidia Rahmatunnisa
      </footer>

    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
