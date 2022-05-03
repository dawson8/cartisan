<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($products as $product)
                    <a href="#" class="bg-white border-b border-gray-200 mx-auto rounded-md hover:grow hover:shadow-lg overflow-hidden">
                        <img class="" src="https://via.placeholder.com/400">
                        <div class="px-4 py-3">
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            <span class="text-gray-500 mt-2">{{ $product->formatPrice() }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
