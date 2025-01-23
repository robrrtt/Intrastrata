<script setup>
import { ref, onMounted } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

// State for managing the current slide
const currentSlide = ref(0);
const totalSlides = 3; // Total number of slides

// Update the current slide
const goToSlide = (index) => {
    currentSlide.value = index;
};

// Initialize the carousel (optional)
onMounted(() => {
    // Additional carousel setup if required (e.g., auto-slide, etc.)
});
</script>
<template>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div :class="['duration-700 ease-in-out', currentSlide === 0 ? 'block' : 'hidden']" data-carousel-item>
                                <img src="/img/bmw.jpg" class="block w-full h-full object-cover" alt="BMW">
                            </div>

                            <!-- Item 2 -->
                            <div :class="['duration-700 ease-in-out', currentSlide === 1 ? 'block' : 'hidden']" data-carousel-item>
                                <img src="/img/fire.jpg" class="block w-full h-full object-cover" alt="Fire">
                            </div>

                            <!-- Item 3 -->
                            <div :class="['duration-700 ease-in-out', currentSlide === 2 ? 'block' : 'hidden']" data-carousel-item>
                                <img src="/img/kim.jpg" class="block w-1/3 h-1/3 object-cover" alt="KIM">
                            </div>
                        </div>

                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button 
                                type="button" 
                                class="w-3 h-3 rounded-full" 
                                :class="{'bg-blue-500': currentSlide === 0, 'bg-gray-300': currentSlide !== 0}" 
                                @click="goToSlide(0)" 
                                aria-label="Slide 1">
                            </button>
                            <button 
                                type="button" 
                                class="w-3 h-3 rounded-full" 
                                :class="{'bg-blue-500': currentSlide === 1, 'bg-gray-300': currentSlide !== 1}" 
                                @click="goToSlide(1)" 
                                aria-label="Slide 2">
                            </button>
                            <button 
                                type="button" 
                                class="w-3 h-3 rounded-full" 
                                :class="{'bg-blue-500': currentSlide === 2, 'bg-gray-300': currentSlide !== 2}" 
                                @click="goToSlide(2)" 
                                aria-label="Slide 3">
                            </button>
                        </div>

                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" @click="goToSlide((currentSlide - 1 + totalSlides) % totalSlides)">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" @click="goToSlide((currentSlide + 1) % totalSlides)">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </template>
    