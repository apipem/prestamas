
@section('title', 'Clientes')

@section('menu_content')
    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h5 class="card-title text-center mb-4">Clientes</h5>
            <div class="row">
                <div class="col-md-6">
                    <!-- Mini formulario para agregar clientes -->
                    <form>
                        <div class="form-group">
                            <label for="nombre_cliente">Nombre del Cliente</label>
                            <input type="text" class="form-control" id="nombre_cliente" placeholder="Ingrese el nombre del cliente">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Cliente</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <!-- Tabla de clientes -->
                    <h5 class="mt-4">Listado de Clientes</h5>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ejemplo Cliente 1</td>
                            <td><button class="btn btn-primary">Editar</button></td>
                        </tr>
                        <tr>
                            <td>Ejemplo Cliente 2</td>
                            <td><button class="btn btn-primary">Editar</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('home')
