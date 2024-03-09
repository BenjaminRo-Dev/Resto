<div class="container text-center">

    {{-- <div class="row col-3 col-sm-6 col-md-5">
        <div class="input-group mb-3">
            <input wire:model="buscar"
                type="text"
                class="form-control"
                placeholder="Numero de sesion">
            <button wire:click="buscarSesion"
                class="btn btn-outline-secondary" 
                type="button">
                Buscar
            </button>
        </div>
    </div> --}}
    <div class="col-md-12">
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th scope="col">Nro sesion</th>
                    <th scope="col">Hora inicio</th>
                    <th scope="col">Hora cierre</th>
                    <th scope="col">Monto inicial</th>
                    <th scope="col">Monto final</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sesiones as $fila => $sesion)
                {{-- @foreach ($sesiones as $sesion) --}}
                    <tr>
                        <td>{{ $sesion->id }}</td>
                        <td>{{ $sesion->fecha_apertura }}</td>
                        <td>{{ $sesion->fecha_cierre }}</td>
                        <td>{{ $sesion->monto_inicial }}</td>
                        <td>{{ $sesion->monto_final }}</td>
                        <td>
                            {{-- <a href="{{ route('sesiones.show', $sesion->id) }}" 
                                class="btn btn-primary">
                                Ver
                            </a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- mostrar links de paginacion si no se esta buscando nada en el buscador: --}}
    @if ($buscar == '')
        <div class="col-12">
            {{ $sesiones->links() }}
        </div>
    @endif


</div>
