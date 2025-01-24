<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

</script>
<template>
    <nav class="flex items-center justify-between flex-wrap bg-gray-50 p-8 sticky">
        <div class="flex items-center flex-shrink-0 text-black mr-6 ">
            <img src="/img/small.png" class="w-48 ">
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white"
            >
                <svg
                    class="fill-current h-3 w-3"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-m lg:flex-grow ">
                 <!--  <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Who We Are
                </a>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Products
                </a>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Connect With Us
                </a>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Join Us
                </a>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Talk To Us
                </a>
                   -->
            </div>
            <div>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Who We Are
                </a>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Products
                </a>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Connect With Us
                </a>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Join Us
                </a>
                <a
                    href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 hover:text-blue hover:font-bold mr-4"
                >
                    Talk To Us
                </a>
            </div>
        </div>
    </nav>
</template>
