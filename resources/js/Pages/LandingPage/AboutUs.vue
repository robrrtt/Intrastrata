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
    <div class="sticky top-0 z-50 bg-white shadow-md">
        <Header />
    </div>
    <Head title="AboutUs" />
    <div>
        <div class="mx-auto max-w-screen ">
            <div class="overflow-hidden bg-white">
                <Carousell />
            </div>
            <div class="flex items-center justify-center">
                <div class="flex flex-col">
                    <h1 class="text-xl md:text-2xl lg:text-4xl font-extrabold leading-tight text-gray-800 uppercase text-center mx-auto w-fit p-6">
                        Intrastrata Assurance Corporation
                    </h1>
                </div>
            </div>
            <Products/>
            <div class="border border-red-600 p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="border border-red-600">
                        <img src="/img/logoGIF.gif" class="w-full h-auto object-cover" />
                    </div>
                    <div class="border border-red-600 p-4">
                        <article>
                            <p class="text-sm md:text-base">
                                INTRASTRATA ASSURANCE CORPORATION is one of the country's leading and oldest Non-Life Insurance Companies. 
                                It was established on September 8, 1959, and was formerly known as Overseas Insurance Company.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
