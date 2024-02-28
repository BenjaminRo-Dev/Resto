<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
        <div>
            <a href="{{ route('productos.create') }}">
                <x-button>
                    {{ __('Crear Producto') }}
                </x-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($productos as $producto)
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold">{{ $producto->nombre }}</h2>
                            <p class="text-sm">{{ $producto->nombre }}</p>
                            <p class="text-sm">{{ $producto->precio_venta }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
