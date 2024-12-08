<!-- resources/views/settings.blade.php -->
@extends('app')
@section('content')

<main x-data="{ isOpen: false }" class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <!-- Main Content -->
    <div class="text-center mb-12">
        <p class="text-base font-semibold text-indigo-600">Riddle 4</p>
        <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
            Active Listening
        </h1>
        <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
            But there could be more hidden here.
        </p>
    </div>

    <!-- Radio Slider Section -->
    <div class="flex items-center justify-center rounded-lg w-full max-w-lg">
        <!-- Outer container for the radio slider -->
        <div x-data="{ value: 50 }" class="relative w-full p-8 bg-gray-200 rounded-lg shadow-md">
            <!-- Radio Title (above the image) -->
            <div class="text-center mb-4">
                <span class="bg-gradient-to-b from-gray-700 to-gray-900 px-4 py-2 text-yellow-400 font-bold text-sm w-full uppercase rounded-lg inline-block">
                    1920s Radio
                </span>
            </div>

            <!-- Radio Background Image -->
            <img 
                src="{{ asset('images/radio.png') }}" 
                alt="1920s Radio" 
                class="w-full h-64 object-cover rounded-lg" 
            />

            <!-- Decorative overlay for better contrast -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-70 rounded-lg"></div>

            <!-- Content overlay -->
            <div class="relative z-10 text-center">
                <!-- Slider Dial -->
                <div class="flex items-center justify-center mt-12">
                    <input 
                        type="range" 
                        x-model="value" 
                        min="0" 
                        max="100"
                        class="slider-thumb appearance-none w-2/3 h-2 bg-gray-200 rounded-lg focus:outline-none"
                    />
                </div>

                <!-- Frequency Display -->
                <div class="mt-4 text-gray-200">
                    <span class="text-lg font-bold">
                        Frequency: <span x-text="value"></span> kHz
                    </span>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection