

@section('title', 'Rutas')

@section('menu_content')
    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h5 class="card-title text-center mb-4">Rutas</h5>
            <div class="row">
                <div class="col-md-6">
                    <!-- Información del cliente -->
                    <h5 class="mt-4">Información del Cliente</h5>
                    <div class="mb-3">
                        <strong>Nombre:</strong> Cliente Ejemplo
                    </div>
                    <div class="mb-3">
                        <strong>Teléfono:</strong> tel 1 - tel 2 - tel 3
                    </div>
                    <div class="mb-3">
                        <strong>Dirección:</strong><br>
                        Dir 1 <br> dir 2 <br> dir 3
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
                    <div class="mb-3">
                        <strong>Observador:</strong> ####
                    </div>
                    <div class="mb-3">
                        <strong>Comienza-Termina:</strong> <br>
                        Cuotas totales:
                    </div>

                    <!-- Botones para pagos -->
                    <div class="mt-4">
                        <button class="btn btn-success mb-2 btn-block">Pago</button>
                        <button class="btn btn-danger mb-2 btn-block">No Pago</button>
                        <input type="number" class="form-control mb-2" id="abono" name="abono" placeholder="Ingrese el monto del abono">
                        <button class="btn btn-info btn-block">Abona</button>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Lista de clientes sin cobrar -->
                    <h5 class="mt-4">Clientes sin Cobrar</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">RUT</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Ocupación</th>
                                <th scope="col">Observador</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>###</td>
                                <td>Nombre</td>
                                <td>
                                    <dl class="mb-0">
                                        <dt>Celular 1</dt>
                                        <dd>Celular 2</dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl class="mb-0">
                                        <dt>Direccion 1</dt>
                                        <dd>Direccion 2</dd>
                                        <dd>Direccion 3</dd>
                                    </dl>
                                </td>
                                <td>Ocupacion</td>
                                <td>#####</td>
                                <td><button type="button" class="btn btn-outline-secondary">Cobrar</button></td>
                            </tr>
                            <tr>
                                <td>###</td>
                                <td>Nombre</td>
                                <td>
                                    <dl class="mb-0">
                                        <dt>Celular 1</dt>
                                        <dd>Celular 2</dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl class="mb-0">
                                        <dt>Direccion 1</dt>
                                        <dd>Direccion 2</dd>
                                        <dd>Direccion 3</dd>
                                    </dl>
                                </td>
                                <td>Ocupacion</td>
                                <td>#####</td>
                                <td><button type="button" class="btn btn-outline-secondary">Cobrar</button></td>
                            </tr>
                            <tr>
                                <td>###</td>
                                <td>Nombre</td>
                                <td>
                                    <dl class="mb-0">
                                        <dt>Celular 1</dt>
                                        <dd>Celular 2</dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl class="mb-0">
                                        <dt>Direccion 1</dt>
                                        <dd>Direccion 2</dd>
                                        <dd>Direccion 3</dd>
                                    </dl>
                                </td>
                                <td>Ocupacion</td>
                                <td>#####</td>
                                <td><button type="button" class="btn btn-outline-secondary">Cobrar</button></td>
                            </tr>
                            <tr>
                                <td>###</td>
                                <td>Nombre</td>
                                <td>
                                    <dl class="mb-0">
                                        <dt>Celular 1</dt>
                                        <dd>Celular 2</dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl class="mb-0">
                                        <dt>Direccion 1</dt>
                                        <dd>Direccion 2</dd>
                                        <dd>Direccion 3</dd>
                                    </dl>
                                </td>
                                <td>Ocupacion</td>
                                <td>#####</td>
                                <td><button type="button" class="btn btn-outline-secondary">Cobrar</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@extends('home')
