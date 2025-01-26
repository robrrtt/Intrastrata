<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
            <Header />

    <Head title="TalktoUs" />



        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        TalktoUs
                    </div>
                </div>
            </div>
        </div>
</template>
