<x-app-layout>
    <div class="fixed z-10 bg-gray-200 w-full shadow-lg px-6 py-2 mx-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap">
            <a href="/" class="text-gray-500 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </a>

            <span class="mx-2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </span>

            @foreach ($category->ancestors->reverse() as $ancestor)
                <a href="{{ route('categories.show', $ancestor->slug) }}" class="text-gray-500 hover:text-gray-600">
                    {{ $ancestor->name }}
                </a>

                <span class="mx-2 text-gray-500 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            @endforeach

            <span class="text-gray-500 hover:text-gray-600">{{ $category->name }}</span>
        </div>
    </div>

    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                
                @foreach ($category->descendantsAndSelf as $children)
                    {{-- {{ $children->name }}<br/> --}}
                    @foreach ($children->products as $product)
                        <a href="{{ route('products.show', $product->slug) }}" class="bg-white border-b border-gray-200 mx-auto rounded-md hover:grow hover:shadow-lg">
                            <img class="rounded-t-md" src="https://via.placeholder.com/400">
                            <div class="px-4 py-3">
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                <span class="text-gray-500 mt-2">{{ $product->formatPrice() }}</span>
                            </div>
                        </a>
                    @endforeach
                @endforeach
                    
                {{-- @foreach ($category->products as $product)
                    <a href="{{ route('products.show', $product->slug) }}" class="bg-white border-b border-gray-200 mx-auto rounded-md hover:grow hover:shadow-lg">
                        <img class="rounded-t-md" src="https://via.placeholder.com/400">
                        <div class="px-4 py-3">
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            <span class="text-gray-500 mt-2">{{ $product->formatPrice() }}</span>
                        </div>
                    </a>
                @endforeach --}}
            </div>
        </div>
    </div>
</x-app-layout>
