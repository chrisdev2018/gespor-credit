@extends("layouts.master")


@section('title', 'Accueil')
@section('styles')
    <style>
        #demo{
            margin-left: 50px;
        }
    </style>
@endsection


@section('content')



<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li  data-target="#demo" data-slide-to="3"></li>
        <li  data-target="#demo" data-slide-to="4"></li>
        <li  data-target="#demo" data-slide-to="5"></li>
        <li  data-target="#demo" data-slide-to="6"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/homepage/analyse.png" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="images/homepage/analyse2.png" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="images/homepage/atravailler.png" alt="New York" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="images/homepage/calculs.png" alt="New York" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="images/homepage/cropped-outils-gestion-de-projet1.jpg" alt="New York" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="images/homepage/resultats.png" alt="New York" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="images/homepage/super.png" alt="New York" width="1100" height="500">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>



@endsection

@section('script')

@endsection

