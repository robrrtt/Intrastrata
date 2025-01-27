<script setup>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faHouseFire, faCar, faScaleBalanced, faShip, faGear, faUserInjured } from '@fortawesome/free-solid-svg-icons';

// Add icons to the library
library.add(faHouseFire, faCar, faScaleBalanced, faShip, faGear, faUserInjured);

</script>
<template>
    <div class="border border-red-600 p-4">
        <h1 class="text-lg md:text-2xl font-extrabold text-gray-800 uppercase text-center">
            Product We Offer
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 m-4 ">
            <!-- Product Cards -->
            <div
                class="border border-red-600 flex flex-col justify-center items-center p-4 bg-gray-50 hover:bg-amber-50">
                <font-awesome-icon :icon="['fas', 'car']" class="text-yellow-400 text-[80px]" />
                <h3 class="text-lg md:text-2xl font-extrabold text-gray-800 text-center mt-2">
                    Motorcar
                </h3>
            </div>
            <div
                class="border border-red-600 flex flex-col justify-center items-center p-4 bg-gray-50 hover:bg-amber-50">
                <font-awesome-icon :icon="['fas', 'house-fire']" class="text-yellow-400 text-[80px]" />
                <h3 class="text-lg md:text-2xl font-extrabold text-gray-800 text-center mt-2">
                    Fire
                </h3>
            </div>
            <div
                class="border border-red-600 flex flex-col justify-center items-center p-4 bg-gray-50 hover:bg-amber-50">
                <font-awesome-icon :icon="['fas', 'scale-balanced']" class="text-yellow-400 text-[80px]" />
                <h3 class="text-lg md:text-2xl font-extrabold text-gray-800 text-center mt-2">
                    Bonds
                </h3>
            </div>
            <div
                class="border border-red-600 flex flex-col justify-center items-center p-4 bg-gray-50 hover:bg-amber-50">
                <font-awesome-icon :icon="['fas', 'ship']" class="text-yellow-400 text-[80px]" />
                <h3 class="text-lg md:text-2xl font-extrabold text-gray-800 text-center mt-2">
                    Marine Lines
                </h3>
            </div>
            <div
                class="border border-red-600 flex flex-col justify-center items-center p-4 bg-gray-50 hover:bg-amber-50">
                <font-awesome-icon :icon="['fas', 'gear']" class="text-yellow-400 text-[80px]" />
                <h3 class="text-lg md:text-2xl font-extrabold text-gray-800 text-center mt-2">
                    Engineering Lines
                </h3>
            </div>
            <div
                class="border border-red-600 flex flex-col justify-center items-center p-4 bg-gray-50 hover:bg-amber-50">
                <font-awesome-icon :icon="['fas', 'user-injured']" class="text-yellow-400 text-[80px]" />
                <h3 class="text-lg md:text-2xl font-extrabold text-gray-800 text-center mt-2">
                    Casualty Lines
                </h3>
            </div>
        </div>

        <h2 class="text-md md:text-xl font-semibold text-gray-800 text-center">
            About Us
        </h2>
    </div>
</template>