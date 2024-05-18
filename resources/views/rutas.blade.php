

@section('title', 'Rutas')

@section('menu_content')
    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h5 class="card-title text-center mb-4">Rutas</h5>
            <div class="row">
                <div class="col-md-6">
                    <!-- Información del cliente -->
                    <h5 class="mt-4">Información del Cliente</h5>
                    <p>Nombre: Cliente Ejemplo</p>
                    <p>Correo electrónico: cliente@example.com</p>
                    <!-- Botones para pagos -->
                    <div class="mt-4">
                        <button class="btn btn-primary mr-2">Pago</button>
                        <button class="btn btn-primary mr-2">No Pago</button>
                        <button class="btn btn-primary">Abona</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Lista de clientes sin cobrar -->
                    <h5 class="mt-4">Clientes sin Cobrar</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Cliente 1</li>
                        <li class="list-group-item">Cliente 2</li>
                        <li class="list-group-item">Cliente 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('home')
