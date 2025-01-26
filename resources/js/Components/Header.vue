<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

// Get the current route from Inertia's page object
const currentUrl = computed(() => usePage().url);

// Function to check if a link is active
const isActive = (path) => computed(() => currentUrl.value.startsWith(path));
</script>

<template>
    <nav class="flex items-center justify-between flex-wrap bg-gray-50 p-8 sticky">
        <div class="flex items-center flex-shrink-0 text-black mr-6">
            <img src="/img/small.png" class="w-48">
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-m lg:flex-grow"></div>
            <div>
                <Link 
                    href="/about-us" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-4', isActive('/about-us').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Who We Are
                </Link>
                <Link 
                    href="/products" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-4', isActive('/products').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Products
                </Link>
                <Link 
                    href="/connect-with-us" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-4', isActive('/connect').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Connect With Us
                </Link>
                <Link 
                    href="/join-us" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-4', isActive('/join-us').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Join Us
                </Link>
                <Link 
                    href="/talk-to-us" 
                    :class="['block mt-4 lg:inline-block lg:mt-0 mr-4', isActive('/contact').value ? 'text-blue-700 font-bold' : 'text-blue-950 hover:font-bold']"
                >
                    Talk To Us
                </Link>
            </div>
        </div>
    </nav>
</template>
