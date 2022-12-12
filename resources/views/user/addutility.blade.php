@extends('layouts.app')

@section('content')

        <x-slot name="logo">
            <a href="/">
                <h1 class="mt-10 text-4xl text-extrabold tracking-wide">Rent Your Utilities</h1>
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="text-center " action="{{ url('utility') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Car Brand -->
            <h3 class="font-semibold tracking-wide text-center">Add New Utilities</h3>
            <div class="mt-4">
                <x-label for="brand" value="{{ __('Brand :') }}" />
                <select name="brand" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 
                focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="Panasonic">Panasonic</option>
                            <option value="Pensonic">Pensonic</option>
                            <option value="Shogun">Shogun</option>
                            <option value="Hitachi">Hitachi</option>
                            <option value="Xiaomi">Xiaomi</option>
                            <option value="Others">Others</option>
                </select>
            </div>

            <!-- Utility Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name : ')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required/>
            </div>

            <!-- Utility Type -->
            <div class="mt-4">
                <x-label for="type" value="{{ __('Type :') }}" />
                <select name="type" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 
                focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="Kitchen & Laundry">Kitchen & Laundry</option>
                            <option value="Mobile Phones">Mobile Phones</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Computers">Computers</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Home & Garden">Home & Garden</option>
                            <option value="Others">Others</option>
                </select>
            </div>

            <!-- Area -->
            <div class="mt-4">
                <x-label for="area" value="{{ __('Area :') }}" />
                <select name="area" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 
                focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="Butterworth">Butterworth</option>
                    <option value="Sungai dua">Sungai Dua</option>
                    <option value="Juru">Juru</option>
                    <option value="Bagan">Bagan</option>
                    <option value="Kepala Batas">Kepala Batas</option>
                    <option value="Penaga">Penaga</option>
                </select>
            </div>

            <!-- Price -->
            <div class="mt-4">
                <x-label for="price" :value="__('Price per Hour : ')" />

                <x-input id="price" class="block mt-1 w-full" type="text" name="price" required />
            </div>

            <!-- Upload Image -->
            <div class="mt-4">
                <x-label for="img" :value="__('Upload Utility Image')" /><br>
                <x-input type="file" id="photo" name="photo" class="block mt-1 w-full"/>
            </div>

            <button type="submit" class="mt-3 self-center">
                Submit
            </button>
        </form>
    @endsection