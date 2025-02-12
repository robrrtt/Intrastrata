<script setup>
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

</script>

<template>
    <Header />

    <Head title="AboutUs" />
        
        <div class="mx-auto max-w-screen ">
            <div class="overflow-hidden bg-white">
                <Carousell />
            </div>
            <div class="flex items-center justify-center  p-6 w-full">
                <div class="flex flex-col w-full text-center">
                    <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-800 md:text-3xl lg:text-6xl dark:text-slate-800 uppercase">
                    Intrastrata Assurance Corporationsss
                    </h1>
                </div>
            </div>
            <Products class="p-10"/>
            <!--<div class="border border-red-600 p-4">-->
                <div>
                <h1 class="text-lg md:text-2xl font-extrabold text-Slate-800 uppercase text-center mt-4">
                   About Us
                </h1>
                <div class="w-full md:w-auto p-4 bg-white ">
                    <!-- Image Section -->
                    <img class="w-full md:w-48 h-96 md:h-auto object-cover rounded-t-lg md:rounded-none md:rounded-l-lg"
                        src="/img/Designer(4).jpeg" alt="">
                    <!-- Text Content -->
                    <div class="p-4">
                        <p class="mb-4 text-Slate-600">
                            INTRASTRATA ASSURANCE CORPORATION is one of the country's leading and oldest Non-Life
                            Insurance Companies. It was established on September 8, 1959, and was formerly known as
                            Overseas Insurance Company.
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
