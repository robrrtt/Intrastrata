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
const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
    isMenuOpenList.value = false; // Close the menu list when the menu is toggled
};

const isMenuOpenList = ref(false);
const toggleMenuList = () => {
    isMenuOpenList.value = !isMenuOpenList.value;
};
</script>

<template>
    <nav class="bg-white border-white-200 sticky top-0 z-50 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <img src="/img/Intrastrata-final.gif" class="w-48" />
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
    
    <div class="flex flex-col md:flex-row md:space-x-10">
        <Link href="/about-us"
            :class="['block py-2 px-3 md:p-0', isActive('/about-us').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']">
            About Us
        </Link>

        <div class="relative">
            <button id="mega-menu-full-dropdown-button" @click="toggleMenuList"
                class="flex items-center py-2 px-3 md:p-0 text-gray-900 rounded-sm md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600">
                Products
                <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
        </div>

        <Link href="/connect-with-us"
            :class="['block py-2 px-3 md:p-0', isActive('/connect').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']">
            Connect With Us
        </Link>
        <Link href="/join-us"
            :class="['block py-2 px-3 md:p-0', isActive('/join-us').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']">
            Join Us
        </Link>
        <Link href="/talk-to-us"
            :class="['block py-2 px-3 md:p-0', isActive('/contact').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']">
            Talk To Us
        </Link>
    </div>
</div>
</div>
        <!-- Dropdown for Products -->
        <div v-show="isMenuOpenList" id="mega-menu-full-dropdown"
            class="mt-1 border-gray-200 shadow-xs bg-white-200 md:bg-white border-y">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:px-6">
                <ul>
                    <Link>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Motorcar</div>
                            
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Fire</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Bonds</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                </ul>
                <ul> 
                    <Link>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Marine Lines</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                            <div class="font-semibold">Engineering Lines</div>
                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already
                                using.</span>
                        </a>
                    </Link>
                    <Link>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
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
