<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <title>Kaleng - @yield('title', 'Home')</title>

  <style>
    /* body {
        background-image: url('/images/kalengU5.jpg');
    } */

    body {
    padding-top: 0;
    }

    nav.navbar {
        position: fixed;
        width: 100%;
        z-index: 1000;
        top: 0;
    }

    .container {
    margin-top: 80px;
    margin-bottom: 60px;
}

</style>

</head>
<body class="bg-dark">

  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Kaleng</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/produk">Produk</a>
          </li>
        @auth
          <li class="nav-item">
            <a class="nav-link" href="#">Pesanan</a>
          </li>
        @endauth
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Tentang Kami</a>
          </li>
        </ul>

        <div class="d-flex mx-2">
            <i class="bi bi-search text-light mx-2"></i>
            <a href="/produk/store">
                <i class="bi  bi-bag-plus text-light mx-2"></i>
            </a>
        @auth
            <a href="#" class="nav-link text-light dropdown-toggle mx-4"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->nama}}
            </a>
          <li class="nav-item dropdown d-flex ">
              <ul class="dropdown-menu dropdown-menu-end">
                  <form action="/logout" method="post">
                    @csrf
                    <li>
                        <button type="submit" class="dropdown-item" >Logout</button>
                    </li>
                  </form>
              </ul>
          </li>
        @else
          <li class="nav-item d-flex">
              <a href="/login" class="nav-link">
              <i class="bi bi-person-lock text-light "></i>
              </a>
          </li>
        @endauth

        </div>

      </div>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>

  <!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
