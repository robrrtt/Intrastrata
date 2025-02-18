<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
const currentSlide = ref(0);
const totalSlides = 4;

const slides = ref([
    { image: '/img/file.svg', title: 'Fire & Allied Perils', details: 'Protect your home or business from fire, natural calamities, and more.', buttonText: 'Learn More', link: "/products/Fire" },
    { image: '/img/motorcar.jpg', title: 'MotorCar', details: 'Secure your vehicle from accidents, theft, and third-party liabilities.', buttonText: 'View Cars', link: "/products/MotorCar" },
    { image: '/img/bonds.jpg', title: 'Investment Bonds', details: 'Safeguard contractual obligations with flexible bond coverage.', buttonText: 'Get Started', link: "/products/Bonds" },
    { image: '/img/cargo.jpg', title: 'Marine', details: 'Cover critical construction, machinery, and engineering risks.', buttonText: 'See More', link: "/products/MarineLines" }
]);

const slideDirection = ref('');
const nextSlide = () => {
    slideDirection.value = 'right';
    currentSlide.value = (currentSlide.value + 1) % totalSlides;
};
const prevSlide = () => {
    slideDirection.value = 'left';
    currentSlide.value = (currentSlide.value - 1 + totalSlides) % totalSlides;
};
const goToSlide = (index) => {
    slideDirection.value = index > currentSlide.value ? 'right' : 'left';
    currentSlide.value = index;
};

let interval;
onMounted(() => {
    interval = setInterval(nextSlide, 4000);
});
onUnmounted(() => {
    clearInterval(interval);
});
</script>

<template>
    <div class="relative w-screen">
        <div class="overflow-hidden bg-white shadow-sm">
            <div class="relative w-screen h-[40vh] md:h-[85vh] overflow-hidden">
                <div class="flex w-full h-full transition-transform duration-700"
                    :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                    <div v-for="(slide, index) in slides" :key="index" class="min-w-full relative h-full">
                        <img :src="slide.image" class="block w-full h-full object-cover" :alt="slide.title">
                        <div
                            class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-white text-center px-6 md:px-12">
                            <!-- <h2 class="text-3xl md:text-5xl font-bold drop-shadow-lg">{{ slide.title }}</h2>
                            <a :href="slide.link"
                                class="mt-4 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-lg font-semibold rounded-full shadow-md hover:scale-105 transition-transform">
                                {{ slide.buttonText }}
                            </a>
                            -->
                            <h1
                                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                                {{ slide.title }}</h1>
                            <p
                                class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                                {{ slide.details }}</p>
                            <a :href="slide.link" class="inline-flex items-center justify-center px-6 py-3 text-white font-semibold rounded-lg shadow-md 
                                        bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 
                                        focus:ring-1 focus:ring-yellow-300">
                                <!-- Home Icon -->

                                {{ slide.buttonText }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute z-30 flex space-x-2 bottom-5 left-1/2 transform -translate-x-1/2">
                <button v-for="(slide, index) in slides" :key="index" @click="goToSlide(index)"
                    class="w-4 h-4 rounded-full transition-all duration-300"
                    :class="currentSlide === index ? 'bg-indigo-500 scale-125' : 'bg-gray-300'">
                </button>
            </div>
            <button class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-5 md:px-20"
                @click="prevSlide">
                <span
                    class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black/50 hover:bg-black/70">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                </span>
            </button>
            <button class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-5 md:px-20"
                @click="nextSlide">
                <span
                    class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black/50 hover:bg-black/70">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
</template>
