<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

// Get the current route from Inertia's page object
const currentUrl = computed(() => usePage().url);
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from "@fortawesome/fontawesome-svg-core";

const isActive = (path) => computed(() => currentUrl.value.startsWith(path));

import {
    faHouseFire,
    faCar,
    faScaleBalanced,
    faShip,
    faGear,
    faUserInjured,
} from "@fortawesome/free-solid-svg-icons";

library.add(faHouseFire, faCar, faScaleBalanced, faShip, faGear, faUserInjured);

const isMenuOpen = ref(false);
const isMenuOpenProducts = ref(false);
const isMenuOpenAboutus = ref(false);

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
    isMenuOpenProducts.value = false; // Products
    isMenuOpenAboutus.value = false; // ABout Us
};

const toggleMenuList = () => {
    isMenuOpenProducts.value = !isMenuOpenProducts.value;
    if (isMenuOpenProducts.value) {
        isMenuOpenAboutus.value = false; // Close About Us if Menu List is opened
    }
};

const toggleAboutUs = () => {
    isMenuOpenAboutus.value = !isMenuOpenAboutus.value;
    if (isMenuOpenAboutus.value) {
        isMenuOpenProducts.value = false; // Close Menu List if About Us is opened
    }
};

</script>

<template>
<nav class="bg-white border-blue-200 sticky top-0 z-50 shadow-lg backdrop-blur-md">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <Link href="/" >
                <img src="/img/Intrastrata-final.gif" class="w-48 " />

            </Link>
            <button @click="toggleMenu" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="mega-menu-full" :aria-expanded="isMenuOpen ? 'true' : 'false'">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div :class="{
                    'hidden': !isMenuOpen,
                    'md:flex': true,
                    'items-center font-medium w-full md:w-auto md:order-1': true,
                    }" id="mega-menu-full">
                <div class="flex flex-col md:flex-row md:space-x-8 text-lg font-[700]">
                    <Link href="/"
                        :class="['block py-2 px-3 md:p-0', isActive('/Home').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold' ]">
                        Home
                    </Link>
                    <div class="relative">
                        <button id="mega-menu-full-dropdown-button" @click="toggleAboutUs"
                            class="flex items-center py-2 px-3 md:p-0 text-gray-900 rounded-sm md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600">
                            About Us
                            <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </div>
                    <div class="relative">
                        <button id="mega-menu-full-dropdown-button" @click="toggleMenuList"
                            class="flex items-center py-2 px-3 md:p-0 text-gray-900 rounded-sm md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600">
                           Product & Services
                            <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </div>
                    <Link href="/gl/Claims"
                        :class="['block py-2 px-3 md:p-0', isActive('/gl/Claims').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']">
                        Claims
                    </Link>
                    <Link href="/gl/join-us"
                        :class="['block py-2 px-3 md:p-0', isActive('/gl/join-us').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']">
                        Join Us
                    </Link>
                    <Link href="/gl/talk-to-us"
                        :class="['block py-2 px-3 md:p-0', isActive('/gl/contact').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']">
                        Talk To Us
                    </Link>
                </div>
            </div>
        </div>
        <!-- Dropdown for About Us -->
        <div v-show="isMenuOpenAboutus" id="mega-menu-full-dropdown"
            class="mt-1 border-gray-200 shadow-xs bg-white-200 md:bg-white border-y">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:px-6">
                <ul>
                    <Link href="/about-us/CompanyProfile"> <!--Left side-->
                        <a class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Company Profile</div>
                            
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link href="/about-us/BranchandAgencies">
                        <a class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Branches and Agencies</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                </ul>
                <ul> 
                    <Link href="/about-us/PartnersandAcreditation"> <!--right side-->
                        <a class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Partners and Acreditation</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link href="/about-us/CorporateGovernance">
                        <a class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Corporate Governance</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                </ul>
            </div>
        </div>

        <!-- Dropdown for Products -->
        <div v-show="isMenuOpenProducts" id="mega-menu-full-dropdown"
            class="mt-1 border-gray-200 shadow-xs bg-white-200 md:bg-white border-y">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:px-6">
                <ul>
                    
                    <Link href="/products/MotorCar">
                        <a class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Motorcar</div>
                            
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link href="/products/Fire">
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Fire & Allied Perils </div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link href="/products/Bonds">
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Bonds</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                </ul>
                <ul> 
                    <Link href="/products/MarineLines">
                        <a class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Marine Lines</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link> 
                    <Link href="/products/EngineeringLines">        
                        <a class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Engineering Lines</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link href="/products/Casualty">
                        <a class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Casualty Lines</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                </ul>
            </div>
        </div>
    </nav>
</template>
