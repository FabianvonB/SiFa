<!-- resources/views/settings.blade.php -->
@extends('app')
@section('content')

<main class="grid min-h-full place-items-center bg-white px-6 py-12 sm:py-16 lg:px-8">
    <!-- Main Content -->
    <div class="text-center mb-8">
        <p class="text-base font-semibold text-indigo-600">Riddle 4</p>
        <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
            Active Listening
        </h1>
        {{-- <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
            But there could be more hidden here.
        </p> --}}
    </div>

    <!-- Radio Slider Section -->
    <div class="flex items-center justify-center rounded-lg w-full max-w-lg">
        <!-- Outer container for the radio slider -->
        <div {{-- x-data="{ value: 50 }" --}}x-data="radioPlayer()" x-init="init()"
            class="relative w-full p-8 bg-gray-200 rounded-lg shadow-md">
            <!-- Radio Title (above the image) -->
            {{-- <div class="text-center mb-4">
                <span
                    class="bg-gradient-to-b from-gray-700 to-gray-900 px-4 py-2 text-yellow-400 font-bold text-sm w-full uppercase rounded-lg inline-block">
                    1920s Radio
                </span>
            </div> --}}

            <!-- Radio Background Image -->
            <img src="{{ asset('images/radio.png') }}" alt="1920s Radio" class="w-full h-64 object-cover rounded-lg" />

            <!-- Decorative overlay for better contrast -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-70 rounded-lg"></div>

            <!-- Content overlay -->
            <div class="relative z-10 text-center">
                <!-- Slider Dial -->
                <div class="flex items-center justify-center mt-12">
                    <input type="range" x-model="frequency" min="0" max="100" step="0.2"
                        class="slider-thumb appearance-none w-full h-2 bg-gray-200 rounded-lg focus:outline-none" />
                </div>

                <!-- Frequency Display -->
                <div class="mt-4 text-gray-200">
                    <span class="text-lg font-bold">
                        Frequency: <span x-text="frequency"></span> kHz
                    </span>
                </div>
            </div>

            <!-- Play and Pause Buttons -->
            <div class="mt-4 flex items-center justify-center space-x-4">
                <button 
                    @click="playAudio" 
                    class="px-4 py-2 z-10 bg-green-500 text-white font-bold rounded-lg shadow-md hover:bg-green-600">
                    Play
                </button>
                <button 
                    @click="pauseAudio" 
                    class="px-4 py-2 z-10 bg-red-500 text-white font-bold rounded-lg shadow-md hover:bg-red-600">
                    Pause
                </button>
            </div>
        </div>
    </div>
</main>

<script>
    function radioPlayer() {
        return {
            frequency: 50,
            audios: [],
            init() {
                this.audios = [
                    new Audio("{{ asset('audio/riddle_solution.mp3') }}"),
                    new Audio("{{ asset('audio/riddle_voice1.mp3') }}"),
                    new Audio("{{ asset('audio/riddle_voice4.mp3') }}"),
                    new Audio("{{ asset('audio/riddle_voices.mp3') }}"),
                ];
                this.audios.forEach(audio => {
                    audio.volume = 0; // Start with volume 0
                    audio.loop = true; // Enable looping
                });
                // Set initial volume based on the initial frequency
                this.updateVolume(this.frequency);
                // Watch frequency change and update volume accordingly
                this.$watch('frequency', (newFrequency) => {
                    this.updateVolume(newFrequency);
                });
            },
            updateVolume(frequency) {
                // Reset all audios to volume 1
                this.audios.forEach(audio => {
                    audio.volume = 1;
                });
            
                // Set volume based on frequency
                if (frequency == 71.6) { // Only play riddle_solution.mp3
                    this.audios[1].volume = 0.3;
                    this.audios[2].volume = 0.3;
                    this.audios[3].volume = 0.3;
                } else if (frequency == 37.2) { // Only play riddle_voice1.mp3
                    this.audios[0].volume = 0.3;
                    this.audios[2].volume = 0.3;
                    this.audios[3].volume = 0.3;
                } else if (frequency == 5) { // Only play riddle_voice4.mp3
                    this.audios[0].volume = 0.3;
                    this.audios[1].volume = 0.3;
                    this.audios[3].volume = 0.3;
                } else {
                    /* this.audios[3].volume = 1; */ // Default fallback: riddle_voices.mp3
                }
            },
            playAudio() {
                this.audios.forEach(audio => {
                    if (audio.paused) {
                        audio.play();
                    }
                });
            },
            pauseAudio() {
                this.audios.forEach(audio => audio.pause());
            },
        };
    }
</script>


@endsection