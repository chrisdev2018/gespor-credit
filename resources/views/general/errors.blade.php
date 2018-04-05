@extends("layouts.master")

@section('title', 'Erreur')

@section('content')
    <h2>Une erreur est survenu</h2><br>
    <mark>{{$erreur->getMessage()}}</mark>

 @endsection