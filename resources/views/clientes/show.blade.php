 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
     integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
 </script>



 <div style="text-align: center;">
    <table class="table table-bordered" style="width: 70%; margin: 0 auto;">
        <h1>Detalle del Cliente</h1>
        <tbody>
            <tr class="table-info">
                <th>ID</th>
                <td>{{ $cliente->id ?? 'NN' }}</td>
            </tr>
            <tr class="table-info">
                <th>Nombre</th>
                <td>{{ $cliente->nombre ?? 'NN' }}</td>
            </tr>
            <tr class="table-info">
                <th>Apellido</th>
                <td>{{ $cliente->apellido ?? 'NN' }}</td>
            </tr>
            <tr class="table-info">
                <th>Edad</th>
                <td>{{ $cliente->edad ?? 'NN' }}</td>
            </tr>
            <tr class="table-info">
                <th>CI</th>
                <td>{{ $cliente->ci ?? 'NN' }}</td>
            </tr>
            <tr class="table-info">
                <th>Correo</th>
                <td>{{ $cliente->correo ?? 'NN' }}</td>
            </tr class="table-info">
            <tr class="table-info">
                <th>Fecha de Nacimiento</th>
                <td>{{ $cliente->fecha_nac ?? 'NN' }}</td>
            </tr>
            <tr class="table-info">
                <th>Estado</th>
                <td>
                    @if ($cliente->estado == 'Activo' || $cliente->estado == 'activo')
                        <span class="badge badge-primary">{{ $cliente->estado }}</span>
                    @else
                        <span class="badge badge-warning">{{ $cliente->estado }}</span>
                    @endif
                </td>
            </tr>
            <tr class="table-info">
                <th>Fecha  de Creacion</th>
                <td>{{ $cliente->created_at ?? 'NN' }}</td>
            </tr>
            <tr class="table-info">
                <th>Fecha de Actualizacion</th>
                <td>{{ $cliente->updated_at ?? 'NN' }}</td>
            </tr>
            <tr class="table-danger">
                <th>Acción</th>
                <td>
                    <a href="{{ route('eliminar', ['id' => $cliente->id]) }}"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');"
                        class="btn btn-danger">
                        Eliminar
                    </a>
                    <a href="{{ route('editar', ['id' => $cliente->id]) }}" class="btn btn-warning">
                        Editar
                    </a>
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Volver</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>




