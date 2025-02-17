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

const features = [
    { icon: ["fas", "car"], title: "Motorcar", text: "Motorcar insurance provides financial protection against loss, damage, or liability incurred by the policyholder due to accidents arising from vehicle ownership and operation." },
    { icon: ["fas", "house-fire"], title: "Fire", text: "Comprehensive insurance coverage that primarily protects against losses or damages caused by fire and lightning, with optional extensions for additional risks through an enhanced premium." },
    { icon: ["fas", "scale-balanced"], title: "Bonds", text: "A bond is a stable and reliable asset designed to safeguard against potential financial losses." },
    { icon: ["fas", "ship"], title: "Marine Lines", text: "Protect your merchandise every step of the way – from the seller's premises to the buyer's hands. Our coverage spans all modes of transportation, whether by land, sea, or air, ensuring seamless protection throughout the journey." }
];
</script>

<template>
    <div class="border border-red-600 p-4">
        <h1 class="text-lg md:text-2xl font-extrabold text-gray-800 uppercase text-center">
            Product We Offer
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
            <div 
                v-for="(feature, index) in features" 
                :key="index" 
                class="bg-white border border-red-200 rounded-lg shadow-md p-6 text-center transition-transform duration-300 hover:scale-105"
            >
                <div class="flex justify-center items-center w-16 h-16 bg-gray-100 rounded-full mx-auto mb-4">
                    <font-awesome-icon :icon="feature.icon" class="text-gray-700 text-2xl" />
                </div>
                <h5 class="text-lg font-semibold text-gray-900">
                    {{ feature.title }}
                </h5>
                <p class="text-sm text-gray-600 mt-2">
                    {{ feature.text }}
                </p>
            </div>
        </div>
    </div>
</template>
