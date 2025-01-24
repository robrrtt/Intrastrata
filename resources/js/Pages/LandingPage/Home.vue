<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Carousell from "@/Components/carousell.vue";
import Header from "@/Components/Header.vue";
</script>

<template>
    <Header />
    <Head title="Homepage" />
    <div>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 pb-2">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <Carousell />
            </div>

            <div class="flex items-center justify-center">
                <div class="text-white p-4">
                    <h1
                        class="text-4xl font-extrabold leading-tight text-gray-800 uppercase"
                    >
                        Intrastrata Assurance Corporation
                    </h1>
                </div>
            </div>
            <div></div>
            <div class="border border-red-600">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    About Us
                </h2>
                <div class="grid grid-cols-3 gap-4 m-4 justify-center">
                    <div class="border border-red-600 col-span-2 ...">
                        <img src="/img/88 corp.jpg" class="block w-80 h-80" />
                    </div>
                    <div class="border border-red-600 ...">
                        <article>
                            <p class="overflow-hidden text-clip">
                                INTRASTRATA ASSURANCE CORPORATION is one of the
                                country's leading and oldest Non-Life Insurance
                                Company. It was stablished on September 8, 1959
                                and was formerly known as Overseas Insurance
                                Company. .
                            </p>
                        </article>
                    </div>
                    <!-- <div class="border border-red-600col-span-2 ...">
                            07
                        </div>
                    -->
                </div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Products We Offers
                </h2>
                <div class="grid grid-cols-3 gap-4 m-4">
                    <div
                        class="border border-red-600 flex flex-col items-center justify-center p-4"
                    >
                        <h2
                            class="text-xl font-semibold leading-tight text-gray-800"
                        >
                            Motorcar
                        </h2>

                        <img src="/img/88 corp.jpg" class="w-40 h-40" />
                    </div>
                    <div
                        class="border border-red-600 flex flex-col items-center justify-center p-4"
                    >
                        <h2
                            class="text-xl font-semibold leading-tight text-gray-800"
                        >
                            Fire
                        </h2>
                        <img src="/img/88 corp.jpg" class="w-40 h-40" />
                    </div>
                    <div
                        class="border border-red-600 flex flex-col items-center justify-center p-4"
                    >
                        <h2
                            class="text-xl font-semibold leading-tight text-gray-800"
                        >
                            Marine Lines
                        </h2>
                        <img src="/img/88 corp.jpg" class="w-40 h-40" />
                    </div>

                    <div class="border border-red-600 ...">03</div>
                    <div class="border border-red-600 ...">05</div>
                    <div class="border border-red-600 ...">06</div>
                    <div class="border border-red-600col-span-2 ...">07</div>
                </div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    About Us
                </h2>
            </div>
        </div>
    </div>
</template>
