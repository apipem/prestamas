

@section('title', 'Informes')

@section('menu_content')
    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h5 class="card-title text-center mb-4">Informes</h5>
            <div class="row">
                <div class="col-md-6">
                    <!-- Formulario para generar informes -->
                    <form>
                        <div class="form-group">
                            <label for="fecha_inicio">Fecha de Inicio</label>
                            <input type="date" class="form-control" id="fecha_inicio">
                        </div>
                        <div class="form-group">
                            <label for="fecha_fin">Fecha de Fin</label>
                            <input type="date" class="form-control" id="fecha_fin">
                        </div>
                        <button type="submit" class="btn btn-primary">Generar Informe</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <!-- Tabla de informes -->
                    <h5 class="mt-4">Listado de Informes</h5>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Información</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>2024-05-20</td>
                            <td>Informe de ventas</td>
                            <td>
                                <button class="btn btn-primary">Descargar Excel</button>
                                <button class="btn btn-primary">Descargar PDF</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('home')
