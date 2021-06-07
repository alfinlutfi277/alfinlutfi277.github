<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>



    <div class="container mt-4">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Pendataan Vaksinasi</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/admin">Admin</a>
                            <a class="nav-link" href="http://127.0.0.1:8000/add">Add</a>

                        </div>
                    </div>
                </div>
            </nav>

    </div>
    @yield('header')
    </header>
    <div class="row">
        @yield('main')

        @yield('sidebar')
    </div>
    </div>
</body>

</html>