

@section('title', 'Rutas')

@section('menu_content')
    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h5 class="card-title text-center mb-4">Rutas</h5>
            <div class="row">
                <div class="col-md-6">
                    <!-- Información del cliente -->
                    <h5 class="mt-4">Información del Cliente</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Nombre:</strong> Cliente Ejemplo
                            </div>
                            <div class="mb-3">
                                <strong>Teléfono:</strong> tel 1 - tel 2 - tel 3
                            </div>
                            <div class="mb-3">
                                <strong>Ocupación:</strong> Oficio
                            </div>
                            <div class="mb-3">
                                <strong>Cobro diario:</strong> <br>
                                Última cuota: <br>
                                Último pago: <br>
                                Días de mora
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Dirección:</strong><br>
                                Dir 1 <br> dir 2 <br> dir 3
                            </div>
                            <div class="mb-3">
                                <strong>Observador:</strong> ####
                            </div>
                            <div class="mb-3">
                                <strong>Comienza-Termina:</strong> <br>
                                Cuotas totales:
                            </div>
                        </div>
                    </div>

                    <!-- Botones para pagos -->
                    <div class="mt-4">
                        <button class="btn btn-success mr-2">Pago</button>
                        <button class="btn btn-danger mr-2">No Pago</button>
                        <input type="number" class="form-control mr-2" id="abono" name="abono" placeholder="Ingrese el monto del abono">
                        <button class="btn btn-info">Abona</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Lista de clientes sin cobrar -->
                    <h5 class="mt-4">Clientes sin Cobrar</h5>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Ocupación</th>
                            <th scope="col">Observador</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $clientes = []; ?>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->direccion }}</td>
                                <td>{{ $cliente->ocupacion }}</td>
                                <td>{{ $cliente->rut }}</td>
                                <td><button type="button" class="btn btn-outline-secondary">Cobrar</button></td>
                            </tr>
                        @endforeach
                            <tr>
                                <td>Nombre</td>
                                <td>
                                    <ul class="list-group">
                                        <li class="list-group-item">Celular 1</li>
                                        <li class="list-group-item">Celular 2</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group">
                                        <li class="list-group-item">Direccion 1</li>
                                        <li class="list-group-item">Direccion 2</li>
                                        <li class="list-group-item">Direccion 3</li>
                                    </ul>
                                </td>
                                <td>Ocupacion</td>
                                <td><button type="button" class="btn btn-outline-secondary">Cobrar</button></td>
                            </tr>
                            <tr>
                                <td>Nombre 2</td>
                                <td>
                                    <ul class="list-group">
                                        <li class="list-group-item">Celular 1</li>
                                        <li class="list-group-item">Celular 2</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group">
                                        <li class="list-group-item">Direccion 1</li>
                                        <li class="list-group-item">Direccion 2</li>
                                        <li class="list-group-item">Direccion 3</li>
                                    </ul>
                                </td>
                                <td>Ocupacion</td>
                                <td><button type="button" class="btn btn-outline-secondary">Cobrar</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('home')
