@extends("layouts.master")


@section('title', 'Accueil')


@section('content')

    <h1>Tableau de bord</h1>

    <button style="color:red" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button >

    <!-- Modal -->
    <div style="color:red" id="myModal" class="modal fade" role="dialog">
        <div style="color:red" class="modal-dialog">

            <!-- Modal content-->
            <div style="color:red" class="modal-content">
                <div style="color:red" class="modal-header">

                    <h4 style="color:red" class="modal-title">Modal Header</h4>
                </div >
                <div style="color:red" class="modal-body">
                    <p style>Some text in the modal.</p>
                </div >
                <div style="color:red" class="modal-footer">
                    <button style="color:red" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div >
            </div >

        </div >
    </div >


@endsection

@section('script')
@endsection