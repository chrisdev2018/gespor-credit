<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESPOR-CREDIT</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/custom_login/style.css" />
    <script src="assets/custom_login/modernizr.custom.63321.js"></script>
    <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>
<body>
<div class="container">


    <section class="main">
        <form class="form-1" method="POST" action="{{route('login')}}">
            {{csrf_field() }}
            <p class="field">
                <input type="text" name="login" placeholder="Username or email">
                <i class="icon-user icon-large"></i>
            </p>
            <p class="field">
                <input type="password" name="password" placeholder="Password">
                <i class="icon-lock icon-large"></i>
            </p>
            <p class="submit">
                <button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
            </p>
        </form>
    </section>
</div>
</body>
</html>