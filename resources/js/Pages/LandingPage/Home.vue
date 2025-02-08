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

library.add(faHouseFire, faCar, faScaleBalanced, faShip, faGear, faUserInjured);

const titleRef = ref(null);
const aboutRef = ref(null);
const imageRef = ref(null);
const textRef = ref(null);

onMounted(() => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("opacity-100", "translate-y-0");
                entry.target.classList.remove("opacity-0", "translate-y-10");
            }
        });
    }, { threshold: 0.2 });

    if (titleRef.value) observer.observe(titleRef.value);
    if (aboutRef.value) observer.observe(aboutRef.value);
    if (imageRef.value) observer.observe(imageRef.value);
    if (textRef.value) observer.observe(textRef.value);
});
</script>

<template>
    <Header />
    <Head title="About Us" />
    
    <div class="mx-auto max-w-screen bg-gray-50">
        <div class="overflow-hidden bg-white">
            <Carousell />
        </div>
        
        <div class="flex items-center justify-center p-10">
            <h1 ref="titleRef" class="text-5xl font-extrabold text-slate-900 tracking-tight transition-all duration-1000 opacity-0 translate-y-10 uppercase">
                Intrastrata Assurance Corporation
            </h1>
        </div>
        
        <Products class="p-12" />
        
        <div ref="aboutRef" class="transition-all duration-1000 opacity-0 translate-y-10 p-10 bg-white shadow-lg rounded-lg mx-5 md:mx-20">
            <h1 class="text-2xl md:text-4xl font-bold text-slate-800 text-center mb-6">
                About Us
            </h1>
            <div class="flex flex-col md:flex-row items-center">
                <img ref="imageRef" class="w-full md:w-80 h-auto object-cover rounded-lg shadow-md transition-all duration-1000 opacity-0 translate-y-10"
                    src="/img/Designer(4).jpeg" alt="About Us">
                <div ref="textRef" class="p-6 transition-all duration-1000 opacity-0 translate-y-10">
                    <p class="mb-6 text-lg text-slate-700 leading-relaxed">
                        INTRASTRATA ASSURANCE CORPORATION is one of the country's leading and oldest Non-Life Insurance Companies, established on September 8, 1959, formerly known as Overseas Insurance Company.
                    </p>
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        See our guideline
                        <svg class="w-5 h-5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <Footer />
</template>
