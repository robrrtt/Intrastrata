<script setup>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from "@fortawesome/fontawesome-svg-core";
import {
    faHouseFire,
    faCar,
    faScaleBalanced,
    faShip,
    faGear,
    faUserInjured,
} from "@fortawesome/free-solid-svg-icons";

library.add(faHouseFire, faCar, faScaleBalanced, faShip, faGear, faUserInjured);
</script>

<template>
    <div class="border border-red-600 p-4">
        <h1 class="text-lg md:text-2xl font-extrabold text-gray-800 uppercase text-center">
            Product We Offer
        </h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 md:px-8 mt-6">
            <!-- Product Cards -->
            <div class="w-full md:w-auto p-6 bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-full mb-4">
                    <font-awesome-icon :icon="['fas', 'car']" class="text-slate-800 text-[35px]" />
                </div>
                <a href="#">
                    <h5 class="mb-2 text-xl md:text-2xl font-semibold tracking-tight text-gray-900">
                        Motorcar
                    </h5>
                </a>
                <p class="mb-4 text-gray-600">
                    Motorcar insurance provides financial protection against loss, damage, or liability incurred by the policyholder due to accidents arising from vehicle ownership and operation.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition">
                    See our guideline
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</template>
