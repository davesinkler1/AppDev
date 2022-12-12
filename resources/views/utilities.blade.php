<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Utility List') }}
        </h2>
    </x-slot>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-xl font-bold text-black"></h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($utilities as $utility)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="{{ url($utility->photo) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $utility->name }}</h3>
                    <span class="mt-2 text-gray-500">RM {{ $utility->prices }}</span>
                <!--    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->prices }}" name="prices">
                        <input type="hidden" value="{{ $product->photo }}"  name="photo">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                    </form> -->
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>