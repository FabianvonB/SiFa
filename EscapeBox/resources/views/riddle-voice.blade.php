<!-- resources/views/settings.blade.php -->
@extends('app')
@section('content')

<main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="text-base font-semibold text-indigo-600">Riddle 4</p>
        <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Active Listening
        </h1>
        <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">But there could be more hidden here.
        </p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="#"
                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go
                back home</a>
            <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span
                    aria-hidden="true">&rarr;</span></a>
        </div>
    </div>

    {{-- Filter 2: Piece count --}}
    {{-- <div class="mt-6 px-4 sm:px-8">
        <div class="w-full max-w-md mx-auto">
            <label for="range" class="block text-sm font-semibold mb-2 leading-6 text-gray-900">
                {{__('layout.filters.piece_count')}}
            </label>

            <!-- Range Slider Container -->
            <div class="relative mt-4">
                <div class="slider-container">
                    <div class="slider-range" :style="rangeStyle"></div>
                </div>
                <!-- Min Handle -->
                <input id="minPieceCount" type="range" name="minPieceCount" min="0" max="3000" step="100"
                    x-model.number="minValue" @input="updateMinValue" class="slider-handle min-handle absolute" />
                <!-- Max Handle -->
                <input id="maxPieceCount" type="range" name="maxPieceCount" min="0" max="3000" step="100"
                    x-model.number="maxValue" @input="updateMaxValue" class="slider-handle max-handle absolute" />
            </div>

            <div class="text-center mt-2">
                <span x-text="maxValue" class="text-lg font-semibold"></span> pieces
                <div x-show="maxValue == 3000" class="text-lg text-gray-900 font-semibold">
                    <span x-text="minValue"></span>
                    <span> - </span>
                    <span x-text="maxValue"> </span>
                    <span> {{__('pieces or bigger')}}</span>
                </div>
                <div x-show="maxValue < 3000" class="text-lg text-gray-900 font-semibold">
                    <span x-text="minValue"></span>
                    <span> - </span>
                    <span x-text="maxValue"> </span>
                    <span>{{__('Pieces')}}</span>
                </div>
            </div>
        </div>
    </div> --}}



</main>


@endsection