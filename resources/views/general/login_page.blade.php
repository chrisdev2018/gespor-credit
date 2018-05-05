<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GESPOR-CREDIT</title>
        <meta name="author" content="Christian FOMEKONG">
        <meta name="description" content="Application de gestion du porte-feuille crédit ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet"  href="assets/custom_login/style.css" />
        <script src="assets/custom_login/modernizr.custom.63321.js"></script>
    </head>



    <body >
    <div class="container">

        <div class="row justify-content-center">
            <img src="images/Banniere.png" alt="image indisponible" class="embed-responsive">
        </div>

        <section class="main">
            <form class="form-1" method="POST" action="{{route('login')}}">
                {{csrf_field() }}
                <p class="field">
                    <input type="text" name="login" placeholder="Username">
                    <i class="icon-user icon-large"></i>
                </p>
                <p class="field">
                    <input type="password" name="password" placeholder="Password">
                    <i class="icon-lock icon-large"></i>
                </p>
                <p class="submit">
                    <button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
                </p>
                {!!$error!!}
            </form>

        </section>

    </div>
    </body>

</html>