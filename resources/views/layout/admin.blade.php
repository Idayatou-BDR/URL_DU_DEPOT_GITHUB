<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin/bootstrap.min.css') }}">
    @yield('link')
</head>

<body>
    <header>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En-tête simple</font></font></span>
              </a>

              <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maison</font></font></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caractéristiques</font></font></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tarification</font></font></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FAQ</font></font></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">À propos</font></font></a></li>
              </ul>
            </header>
          </div>

    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maison</font></font></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caractéristiques</font></font></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tarification</font></font></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FAQ</font></font></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">À propos</font></font></a></li>
              </ul>
              <p class="text-center text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2024 Company, Inc</font></font></p>
            </footer>
          </div>



    </footer>
    <script src="{{ asset('client/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>

</html>
