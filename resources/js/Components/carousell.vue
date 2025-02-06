<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

// State for managing the current slide
const currentSlide = ref(0);
const totalSlides = 4; // Total number of slides

// Function to go to the next slide
const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % totalSlides;
};

// Function to manually go to a specific slide
const goToSlide = (index) => {
    currentSlide.value = index;
};

// Auto-slide interval
let interval;
onMounted(() => {
    interval = setInterval(nextSlide, 4000); // Change image every 3.5 seconds
});

onUnmounted(() => {
    clearInterval(interval); // Cleanup to prevent memory leaks
});
</script>
<template>
    <div class="relative w-screen">
        <div class="overflow-hidden bg-white shadow-sm">
            <!-- Carousel Wrapper (Full Width) -->
            <div class="relative w-screen h-[40vh] md:h-[70vh] overflow-hidden">
                <!-- Slide Items -->
                <div
                    v-for="(image, index) in ['/img/nyc.jpg', '/img/motorcar.jpg', '/img/bonds.jpg', '/img/cargo.jpg']"
                    :key="index"
                    :class="[
                        'absolute inset-0 transition-opacity duration-700 ease-in-out h-full',
                        currentSlide === index ? 'opacity-100' : 'opacity-0'
                    ]"
                >
                    <img :src="image" class="block w-full h-full object-cover" :alt="'Slide ' + (index + 1)">
                </div>
            </div>

            <!-- Slider Indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-4 pb-4">
                <button 
                    v-for="(slide, index) in totalSlides" 
                    :key="index" 
                    class="w-3 h-3 rounded-full"
                    :class="{'bg-blue-500': currentSlide === index, 'bg-gray-300': currentSlide !== index}" 
                    @click="goToSlide(index)">
                </button>
            </div>

            <!-- Slider Controls -->
            <button class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-14 cursor-pointer" 
                    @click="goToSlide((currentSlide - 1 + totalSlides) % totalSlides)">
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 hover:bg-white/50">
                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                </span>
            </button>
            <button class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-14 cursor-pointer" 
                    @click="goToSlide((currentSlide + 1) % totalSlides)">
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 hover:bg-white/50">
                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</template>
