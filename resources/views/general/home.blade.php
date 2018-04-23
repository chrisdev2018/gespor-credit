@extends("layouts.master")


@section('title', 'Accueil')
@section('styles')
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
@endsection


@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>World</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>


@endsection

@section('script')

    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="assets/js/lib/vector-map/vector.init.js"></script>
@endsection