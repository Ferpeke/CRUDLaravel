<!doctype html>
<html lang="es" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('tituloPagina')</title>
</head>
<body class="bg-secondary d-flex align-items-center">
    <div class="container mt-3 position-absolute top-50 start-50 translate-middle""> <!--Centramos todo el contenido https://getbootstrap.com/docs/5.0/utilities/position/ -->
        <div class="row">
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/3525e1437c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>