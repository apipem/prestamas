@extends('home')

@section('title', 'Clientes')

@section('menu_content')
    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h5 class="card-title text-center mb-4">Clientes</h5>
            <div class="row">
                <div class="col-md-6">
                    <!-- Formulario para agregar clientes -->
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="nombre_cliente">Nombre del Cliente</label>
                            <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Ingrese el nombre del cliente">
                        </div>
                        <div class="form-group">
                            <label for="telefono_cliente">Teléfono</label>
                            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" placeholder="Ingrese el teléfono del cliente">
                        </div>
                        <div class="form-group">
                            <label for="direccion_cliente">Dirección</label>
                            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" placeholder="Ingrese la dirección del cliente">
                        </div>
                        <div class="form-group">
                            <label for="ocupacion_cliente">Ocupación</label>
                            <input type="text" class="form-control" id="ocupacion_cliente" name="ocupacion_cliente" placeholder="Ingrese la ocupación del cliente">
                        </div>
                        <div class="form-group">
                            <label for="rut_cliente">RUT</label>
                            <input type="text" class="form-control" id="rut_cliente" name="rut_cliente" placeholder="Ingrese el RUT del cliente">
                        </div>
                        <div class="form-group">
                            <label for="rut_cliente">Observador</label>
                            <input type="text" class="form-control" id="observador_cliente" name="observador_cliente" placeholder="Ingrese el Observador">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Cliente</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <!-- Tabla de clientes -->
                    <h5 class="mt-4">Listado de Clientes</h5>
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
