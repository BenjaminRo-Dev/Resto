<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Monto inicial de la sesión') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('sesiones.store') }}" method="POST" >
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="monto_inicial" 
                                type="number"
                                step="0.01"
                                class="form-control"
                                placeholder="Monto inicial"
                                required>
                            <label>Monto inicial</label>
                        </div>
                        {{-- numero de caja: --}}
                        {{-- <div class="form-floating mb-3">
                            <input name="numero_caja"
                                type="number"
                                class="form-control"
                                placeholder="Número de caja"
                                required>
                            <label>Número de caja</label>
                        </div> --}}
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
