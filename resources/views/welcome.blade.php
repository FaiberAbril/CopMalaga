@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('titleContent')
    <h1 class="text-center py-4">Coooperativa</h1>
@endsection

@section('Content')

    {{-- Estilo bonito alternativo con verde, amarillo, negro y blanco --}}
    <style>
        .dashboard-card {
            transition: all 0.3s ease-in-out;
            border-left: 6px solid #28a745; /* Borde izquierdo verde */
            border-radius: 12px;
            background-color: #fff; /* Blanco */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Sombra más marcada */
            overflow: hidden;
        }

        .dashboard-card:hover {
            transform: scale(1.02);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.25);
        }

        .card-title {
            font-weight: bold;
            color: #000000; /* Negro */
            font-size: 1.2rem;
        }

        .card-text {
            color: #555; /* Gris oscuro */
        }

        .btn-primary {
            background-color: #28a745; /* Negro */
            border-color: #28a745;
            color: #fff; /* Blanco */
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background-color: #ffc107; /* Amarillo */
            border-color: #ffc107;
            color: #000; /* Negro */
        }

        .dashboard-card .card-body {
            padding: 1.5rem;
        }

        body {
            background-color: #f8f9fa; /* Gris claro de fondo */
        }
    </style>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-md-4 mb-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Medios de pago</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('mediospago.index') }}" class="btn btn-primary">Gestionar medios de pago</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Mora</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Gestionar Mora</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Pagos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Gestionar Pagos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Prestamos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Gestionar Prestamos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Tipo Prestamos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Gestionar Tipo Prestamos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Estado de Prestamos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Estado de Prestamo</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('clientes.index') }}" class="btn btn-primary">Clientes</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
