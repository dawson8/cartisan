<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-2 gap-4 p-6">
                <div class="space-y-4">
                    <img class="" src="https://via.placeholder.com/600x400">

                    <div class="grid grid-cols-6 gap-2">
                        @for ($i = 0; $i < 6; $i++)
                            <img class="" src="https://via.placeholder.com/100">
                        @endfor
                    </div>
                </div>
                <div class="space-y-4">
                    <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>

                    <p class="text-2xl text-gray-900">{{ $product->formatPrice() }}</p>

                    <div class="flex items-center">
                        @for ($i = 0; $i < 4; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>

                        <a href="#" class="ml-3 text-sm text-indigo-600 hover:text-indigo-500">100 reviews</a>
                    </div>

                    <p class="text-gray-500">
                        {{ $product->description }}
                    </p>

                    <x-button>Add To Basket</x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
