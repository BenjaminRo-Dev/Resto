<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar nuevo producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nombre" class="block text-sm font-medium text-gray-700">
                                Nombre
                            </label>
                            <input type="text" name="nombre" id="nombre" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="precio_venta" class="block text-sm font-medium text-gray-700">
                                Precio de venta
                            </label>
                            <input type="number" name="precio_venta" id="precio_venta" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Guardar') }}
                            </x-button>
                        </div>
                    </form>
                    <a href="{{ route('productos.index') }}">
                        <x-button class="ml-4">
                            {{ __('Cancelar') }}
                        </x-button>
                    </a>
            </div>
        </div>
    </div>
</x-app-layout>
