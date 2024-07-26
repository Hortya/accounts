@extends('main')
@section('ttl', 'Opérations de Juillet 2023 - Mes Comptes')
@section('total')
<section class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">
        <h2 class="my-0 fw-normal fs-4">Solde aujourd'hui</h2>
    </div>
    <div class="card-body">
        <p class="card-title pricing-card-title text-center fs-1">{{$total}}€</p>
    </div>
</section>
@endsection
@section('h1', 'Opérations de Juillet 2023')
@section('content')
<table class="table table-striped table-hover align-middle">
    <thead>
        <tr>
            <th scope="col" colspan="2">Opération</th>
            <th scope="col" class="text-end">Montant</th>
            <th scope="col" class="text-end">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
        <x-operation :transaction="$transaction" />
        @endforeach
    </tbody>
</table>

<div class="card-footer">
    <nav class="text-center">
        <ul class="pagination d-flex justify-content-center m-2">
            <li class="page-item disabled">
                <span class="page-link">
                    <i class="bi bi-arrow-left"></i>
                </span>
            </li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Juillet 2023</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="index.html">Juin 2023</a>
            </li>
            <li class="page-item">
                <span class="page-link">...</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="index.html">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </li>
        </ul>
    </nav>
    @endsection