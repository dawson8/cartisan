<div x-data="{ open: false }" @mouseover.away="open = false" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent ">
    <a @mouseover="open = true" class="text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
        {{ $trigger }}
    </a>
    
    <div x-show="open" class="w-full mt-0 shadow-lg bg-white absolute left-0 top-full">
        <div class="px-6 lg:px-8 py-5">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white text-gray-600">
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Lorem ipsum</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Dolor sit</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Amet consectetur</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Cras justo odio</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Adipisicing elit</a>
                </div>
                <div class="bg-white text-gray-600">
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Explit voluptas</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Perspiciatis quo</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Cras justo odio</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Laudant maiores</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Provident dolor</a>
                </div>
                <div class="bg-white text-gray-600">
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Iste quaerato</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Cras justo odio</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Est iure</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Praesentium</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Laboriosam</a>
                </div>
                <div class="bg-white text-gray-600">
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Cras justo odio</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Saepe</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Vel alias</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Sunt doloribus</a>
                    <a href="#!" aria-current="true" class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">Cum dolores</a>
                </div>
            </div>
        </div>
    </div>
</div>
