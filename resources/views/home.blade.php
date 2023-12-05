@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a class="btn btn-lg btn-primary mb-4" href="#">Registrar Usuario</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i>Registros de usuarios</div>
        <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-lg" id="usuarios">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombre completo</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios['data'] as $usuario)
                        
                        <tr class="border-separate border border-gray-300">
                            <td class="text-center">{{ $usuario->id }}</td>
                            <td class="text-center text-uppercase">{{ $usuario->name }}</td>
                            <td class="text-center">{{ $usuario->email }}</td>

                            <td class="text-center uppercase">

                            <div class="row">
                                <div class="col input-group-prepend justify-content-center">
                                    <a class="btn btn-success" href="#">
                                        <span class="text-white">
                                            Editar
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
