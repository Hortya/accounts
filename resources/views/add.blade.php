@extends('main')
@section('ttl', 'Ajouter une opération - Mes Comptes')
@section('h1', 'Ajouter une opération' )
@section('content')
<x-form :action="create"/x>
@endsection