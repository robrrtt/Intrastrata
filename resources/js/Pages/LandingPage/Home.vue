<script setup>
import { ref, onMounted } from "vue";
import { Head } from "@inertiajs/vue3";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/footer.vue";
import Carousell from "@/Components/carousell.vue";
import Products from "@/Components/Products.vue";

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faHouseFire, faCar, faScaleBalanced, faShip, faGear, faUserInjured } from '@fortawesome/free-solid-svg-icons';

// Add icons to the library
library.add(faHouseFire, faCar, faScaleBalanced, faShip, faGear, faUserInjured);

// Refs for animation
const titleRef = ref(null);
const aboutRef = ref(null);
const imageRef = ref(null);
const textRef = ref(null);

// Function to animate elements when they come into view
onMounted(() => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("opacity-100", "translate-y-0");
                entry.target.classList.remove("opacity-0", "translate-y-10");
            }
        });
    }, { threshold: 0.2 });

    // Observe elements
    if (titleRef.value) observer.observe(titleRef.value);
    if (aboutRef.value) observer.observe(aboutRef.value);
    if (imageRef.value) observer.observe(imageRef.value);
    if (textRef.value) observer.observe(textRef.value);
});
</script>

<template>
    <Header />
    <Head title="AboutUs" />
    
    <div class="mx-auto max-w-screen bg-gray-100">
        <div class="overflow-hidden bg-white">
            <Carousell />
        </div>
        
        <!-- Title Section with Scroll Animation -->
        <div class="flex items-center justify-center p-6 w-full">
            <div class="flex flex-col w-full text-center">
                <h1 ref="titleRef" class="text-3xl font-extrabold leading-tight tracking-tight text-slate-800 md:text-3xl lg:text-6xl dark:text-slate-800 uppercase transition-all duration-1000 opacity-0 translate-y-10">
                    Intrastrata Assurance Corporation
                </h1>
            </div>
        </div>
        
        <Products class="p-10" />
        
        <!-- About Us Section -->
        <div ref="aboutRef" class="transition-all duration-1000 opacity-0 translate-y-10">
            <h1 class="text-lg md:text-2xl font-extrabold text-slate-800 uppercase text-center mt-4">
                About Us
            </h1>
            <div class="w-full md:w-auto p-4 bg-white flex flex-col md:flex-row items-center">
                <!-- Image Section -->
                <img ref="imageRef" class="w-full md:w-48 h-96 md:h-auto object-cover rounded-t-lg md:rounded-none md:rounded-l-lg transition-all duration-1000 opacity-0 translate-y-10"
                    src="/img/Designer(4).jpeg" alt="">
                
                <!-- Text Content -->
                <div ref="textRef" class="p-4 transition-all duration-1000 opacity-0 translate-y-10">
                    <p class="mb-4 text-slate-600">
                        INTRASTRATA ASSURANCE CORPORATION is one of the country's leading and oldest Non-Life Insurance Companies. It was established on September 8, 1959, and was formerly known as Overseas Insurance Company.
                    </p>
                    <a href="#"
                        class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition">
                        See our guideline
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <Footer />
</template>
