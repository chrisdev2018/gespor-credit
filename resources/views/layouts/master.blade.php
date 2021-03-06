<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
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

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap-select/css/bootstrap-select.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    @yield('styles')

   <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>-->

</head>
<body>


        <!-- sidebar LEFT-PANEL -->
            @include('general.sidebar')<!-- /#sidebar-->
        <!-- sidebar -->

        <!-- RIGHT-PANEL  -->

            <div id="right-panel" class="right-panel">

            <!-- Header-->
            @include('general.header')
            <!-- Header-->

            <!-- breadcrumbs-->
            @include('general.breadcrumbs')
            <!-- breadcrumbs-->


            <div class="content mt-3">
                    @yield('content')
            </div> <!-- .content -->
                <p class="clearfix"></p>
          @include('general.footer')



        </div><!-- /#right-panel -->
        <!-- RIGHT-PANEL -->

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/bootstrap-select/js/bootstrap-select.js"></script>
<script type="text/javascript">
   jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    } );
</script>

<script type="text/javascript">
    var mySelect = $('select').selectpicker();
</script>


@yield('scripts')

</body>
</html>
