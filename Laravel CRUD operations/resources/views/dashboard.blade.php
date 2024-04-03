<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <div class=" text-center my-20"">
                    <a class="px-10 py-3 bg-red-200 rounded-sm hover:bg-red-300 duration-300" href="{{route('product.index')}}">Explore Products Section</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
