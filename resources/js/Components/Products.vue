<script setup>
import { Link, usePage } from '@inertiajs/vue3';
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
    <!--<div class="border border-red-600 p-4"> -->
        <div class="   ">
        <h1 class="text-lg md:text-3xl font-extrabold text-gray-700 uppercase text-center">
            Product We Offer
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 md:px-8 mt-6">
            <!-- Product Cards -->
            <div class="w-full md:w-auto p-6 bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-full mb-4">
                    <font-awesome-icon :icon="['fas', 'car']" class="text-orange-600 text-[30px]" />
                </div>
                <Link href="/products/MotorCar">
                    <h5 class="mb-2 text-xl md:text-2xl font-semibold tracking-tight text-gray-900">
                        Motorcar
                    </h5>
                </Link>
                <p class="mb-4 text-gray-600">
                    Motorcar insurance provides financial protection against loss, damage, or liability incurred by the policyholder due to accidents arising from vehicle ownership and operation.
                </p>
                <Link href="/products/MotorCar" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition">
                    See our guideline
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </Link>
            </div>
            <div class="w-full md:w-auto p-6 bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-full mb-4">
                    <font-awesome-icon :icon="['fas', 'house-fire']" class="text-orange-600 text-[30px]" />
                </div>
                <Link href="/products/Fire">
                    <h5 class="mb-2 text-xl md:text-2xl font-semibold tracking-tight text-gray-900">
                        Fire
                    </h5>
                </Link>
                <p class="mb-4 text-gray-600">
                    Comprehensive insurance coverage that primarily protects against losses or damages caused by fire and lightning, with optional extensions for additional risks through an enhanced premium.
                </p>
                <Link href="/products/Fire" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition">
                    See our guideline
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </Link>
            </div>
            <div class="w-full md:w-auto p-6 bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-full mb-4">
                    <font-awesome-icon :icon="['fas', 'scale-balanced']" class="text-orange-600 text-[30px]" />
                </div>
                <Link href="/products/Bonds">
                    <h5 class="mb-2 text-xl md:text-2xl font-semibold tracking-tight text-gray-900">
                        Bonds
                    </h5>
                </Link>
                <p class="mb-4 text-gray-600">
                    A bond is a stable and reliable asset designed to safeguard against potential financial losses.
                </p>
                <Link href="/products/Bonds" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition">
                    See our guideline
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </Link>
            </div>
            <div class="w-full md:w-auto p-6 bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-full mb-4">
                    <font-awesome-icon :icon="['fas', 'ship']" class="text-orange-600 text-[30px]" />
                </div>
                <Link href="/products/MarineLines">
                    <h5 class="mb-2 text-xl md:text-2xl font-semibold tracking-tight text-gray-900">
                        Marine Lines
                    </h5>
                </Link>
                <p class="mb-4 text-gray-600">
                    Protect your merchandise every step of the way – from the seller's premises to the buyer's hands. Our coverage spans all modes of transportation, whether by land, sea, or air, ensuring seamless protection throughout the journey.
                </p>
                <Link href="/products/MarineLines" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition">
                    See our guideline
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </Link>
            </div>
            <div class="w-full md:w-auto p-6 bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-full mb-4">
                    <font-awesome-icon :icon="['fas', 'gear']" class="text-orange-600 text-[30px]" />
                </div>
                <Link href="/products/EngineeringLines">
                    <h5 class="mb-2 text-xl md:text-2xl font-semibold tracking-tight text-gray-900">
                        Engineering Lines
                    </h5>
                </Link>
                <p class="mb-4 text-gray-600">
                    It provides comprehensive coverage for the construction and installation of structures, machinery, equipment, systems, and processes, safeguarding against loss, material damage, and third-party liability.                </p>
                <Link href="/products/EngineeringLines" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition">
                    See our guideline
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </Link>
            </div>
            <div class="w-full md:w-auto p-6 bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-full mb-4">
                    <font-awesome-icon :icon="['fas', 'user-injured']" class="text-orange-600 text-[30px]" />
                </div>
                <Link href="/products/Casualty">
                    <h5 class="mb-2 text-xl md:text-2xl font-semibold tracking-tight text-gray-900">
                        Casualty Lines 
                    </h5>
                </Link>
                <p class="mb-4 text-gray-600">
                    Accidental Insurance offers financial protection, providing compensation as agreed upon, in the event of death or bodily injury resulting from an accidental, violent, external, and visible cause.
                </p>
                <Link href="/products/Casualty" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition">
                    See our guideline
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </Link>
            </div>
        </div>
    </div>
</template>
