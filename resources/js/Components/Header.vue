<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

// Get the current route from Inertia's page object
const currentUrl = computed(() => usePage().url);

// Function to check if a link is active
const isActive = (path) => computed(() => currentUrl.value.startsWith(path));

// State for mobile menu visibility
const isMenuOpen = ref(false);

// Toggle menu function
const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};
</script>

<template>
    <nav class="flex items-center justify-between flex-wrap bg-gray-50 p-4 sticky top-0 z-50 bg-white shadow-md">
        <div class="flex items-center flex-shrink-0 text-black">
            <img src="/img/small.png" class="w-48">
        </div>
        <div class="block lg:hidden">
            <button 
                @click="toggleMenu" 
                class="flex items-center px-3 py-2 border rounded text-slate-400 border-slate-400 hover:text-slate hover:border-amber transition duration-400"
            >
                <svg 
                    :class="['fill-current h-3 w-3 transform transition-transform duration-400', isMenuOpen ? 'rotate-90' : 'rotate-0']" 
                    viewBox="0 0 20 20" 
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div 
            :class="[
                'w-full block flex-grow lg:flex lg:items-center lg:w-auto',
                isMenuOpen ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0 lg:max-h-full lg:opacity-100'
            ]"
            class="overflow-hidden transition-all duration-500 ease-in-out"
            >
            <div class="text-m lg:flex-grow"></div>
            <div class="lg:flex ">
                <Link 
                    href="/about-us" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-10', isActive('/about-us').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Who We Are
                </Link>
                <Link 
                    href="/products" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-10', isActive('/products').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Products
                </Link>
                <Link 
                    href="/connect-with-us" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-10', isActive('/connect').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Connect With Us
                </Link>
                <Link 
                    href="/join-us" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-10', isActive('/join-us').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Join Us
                </Link>
                <Link 
                    href="/talk-to-us" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-10', isActive('/contact').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Talk To Us
                </Link>
            </div>
        </div>
    </nav>
</template>