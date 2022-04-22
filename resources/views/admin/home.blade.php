@extends('adminlte::page')


@section('title', 'Painel')


@section('content_header')

<h1>Dashboard</h1>

@endsection


@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>R$50000,00</h3>
                    <p>Faturamento</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>R$40000,00</h3>
                    <p>Cobrado</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>R$50000,00</h3>
                    <p>Vencido</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>R$50000,00</h3>
                    <p>Recebido</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
            </div>
        </div>
    </div>

@endsection
