@extends('layouts.app')

@section('title', 'Administrar Estado de Prestamo')

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Administrar Estado de Prestamo</h1>
@endsection

@section('Content')
<div class="container"></class>

<div class="d-flex justify-content-between align-items-center gap-3 mb-4">
            <a href="{{route('welcome')}}" >
                <i class="bi bi-arrow-left iconBack"></i>
            </a>

            <a href="" class="crearBtn">
                <i class="bi bi-plus-circle"></i> Crear nuevo Estado de Prestamo
            </a>
         
        </div>

        <div class="card shadow-lg rounded-3">
            <div class="card-body">
                <table class="table table-striped table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>descripción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                                    <!-- <div class="d-flex justify-content-center gap-2">
                                        <a  href=" " class="btnActualizar d-flex gap-2">
                                            <i class="bi bi-pencil-square"></i> Actualizar
                                        </a>

                                        <form action="" method="POST" >
                                            @csrf
                                            <button type="submit" class="btnEliminar d-flex gap-2">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </div> -->
                                </td>
                            </tr>
                   
                    </tbody>
                </table>
            </div>
        </div>
    </di>
    
@endsection
