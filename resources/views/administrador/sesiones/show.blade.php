<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrar Sesiones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <dl class="row">
                        <dt class="col-sm-3">Sesion numero:</dt>
                        <dd class="col-sm-9">{{ $sesione->id }}</dd>

                        <dt class="col-sm-3">Usuario:</dt>
                        <dd class="col-sm-9">{{ $sesione->user->name }}</dd>
                    
                        <dt class="col-sm-3">Montos:</dt>
                        <dd class="col-sm-9">
                            <p>Inicial: {{ $sesione->monto_inicial }} </p>
                            <p>Final: {{ $sesione->monto_final }}</p>
                        </dd>
                    
                        <dt class="col-sm-3">Horarios:</dt>
                        <dd class="col-sm-9">
                            <p>Inicial: {{ $sesione->fecha_apertura }} </p>
                            <p>Final: {{ $sesione->fecha_cierre }}</p>
                        </dd>

                        <dt class="col-sm-3">Caja:</dt>
                        <dd class="col-sm-9">{{ $sesione->numero_caja }}</dd>

                        <dt class="col-sm-3">Tickets vendidos:</dt>
                        <dd class="col-sm-9">{{ $tickets_vendidos }}</dd>
                        
                    </dl>

                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Content for list item
                            </div>
                            <span class="badge text-bg-primary rounded-pill">14</span>
                        </li>
                        {{-- <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Content for list item
                            </div>
                            <span class="badge text-bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Content for list item
                            </div>
                            <span class="badge text-bg-primary rounded-pill">14</span>
                        </li> --}}
                    </ol>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
