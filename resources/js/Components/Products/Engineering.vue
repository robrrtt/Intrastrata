<script setup>
import { ref } from 'vue';

const coverages = ref([
    { title: 'Contractor’s All Risk (CAR)', description: 'Covers construction projects against damage and third-party liabilities.' },
    { title: 'Erection All Risk (EAR)', description: 'Protects equipment installation and assembly projects from unforeseen risks.' },
    { title: 'Machinery Breakdown (MB)', description: 'Covers sudden and unforeseen damage to insured machinery.' },
    { title: 'Electronic Equipment Insurance (EEI)', description: 'Protects computers, medical, and industrial electronic devices from damage or theft.' },
]);

const showDetails = ref(false);
const toggleDetails = () => {
    showDetails.value = !showDetails.value;
};
</script>

<template>
    <div class="bg-gray-100 min-h-screen">
        <!-- Hero Section -->
        <section class="relative bg-gray-800 text-white py-20 px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-4xl font-bold mb-4">Engineering Lines Insurance</h1>
                <p class="text-lg opacity-90">Comprehensive protection for construction projects, machinery, and industrial equipment.</p>
                <button @click="toggleDetails"
                    class="mt-6 px-6 py-3 bg-gray-700 hover:bg-gray-900 text-white rounded-lg transition-all">
                    Learn More
                </button>
            </div>
        </section>

        <!-- Coverage Details -->
        <section class="py-16 px-6 max-w-5xl mx-auto">
            <h2 class="text-3xl font-semibold text-center text-gray-900 mb-8">Coverage & Benefits</h2>
            <div class="grid sm:grid-cols-2 gap-6">
                <div v-for="(coverage, index) in coverages" :key="index"
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                    <h3 class="text-xl font-semibold text-gray-700">{{ coverage.title }}</h3>
                    <p class="text-gray-600">{{ coverage.description }}</p>
                </div>
            </div>
        </section>

        <!-- Additional Details (Expandable) -->
        <section v-if="showDetails"
            class="bg-white shadow-md rounded-lg max-w-4xl mx-auto p-8 mt-4 transition-opacity duration-300">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Why Choose Our Engineering Insurance?</h3>
            <ul class="list-disc ml-6 text-gray-700">
                <li>Comprehensive risk protection for projects and equipment</li>
                <li>Ensures financial stability during unforeseen damage or breakdowns</li>
                <li>Tailored policies for different industries and engineering needs</li>
                <li>Fast claims processing and dedicated support</li>
            </ul>
            <button @click="toggleDetails"
                class="mt-4 px-5 py-2 bg-gray-700 hover:bg-gray-900 text-white rounded-lg transition-all">
                Close
            </button>
        </section>

        <!-- Call to Action -->
        <section class="text-center py-16 bg-gray-800 text-white mt-12">
            <h2 class="text-3xl font-bold">Secure Your Engineering Assets Today!</h2>
            <p class="text-lg opacity-90 mt-2">Get a free consultation for Engineering Lines insurance.</p>
            <button class="mt-6 px-6 py-3 bg-gray-700 hover:bg-gray-900 text-white rounded-lg transition-all">
                Get a Quote
            </button>
        </section>
    </div>
</template>
