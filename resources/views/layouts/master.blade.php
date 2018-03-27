<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Application de gestion du porte-feuille crédit ">
    <meta name="author" content="Christian FOMEKONG">
    <link rel="icon" href="../../favicon.ico">
    <title>@yield('title') | GESPOR-CREDIT</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles design by me -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">

    @yield('styles')
</head>

<body>
    <div class="loader"></div>

    <div class="container-fluid">
        <div class="row">
        @include('general.sidebar')
            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3 main">
                @include('general.navbar')
               <div class="container corps">
                   @yield('content')
               </div>
                @include('general.footer')
            </main>
        </div>
    </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
    @yield('scripts')
</body>
</html>
