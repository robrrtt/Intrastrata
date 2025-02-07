<script setup>
import { ref } from 'vue';

const coverages = ref([
    { title: 'Comprehensive Coverage', description: 'Protects against damage, theft, and accidents.' },
    { title: 'Third-Party Liability', description: 'Covers damages to other vehicles and properties.' },
    { title: 'Acts of Nature', description: 'Covers floods, typhoons, and earthquakes.' },
    { title: 'Personal Accident', description: 'Financial assistance for medical expenses and injuries.' }
]);

const showDetails = ref(false);
const toggleDetails = () => {
    showDetails.value = !showDetails.value;
};
</script>

<template>
    <div class="bg-gray-100 min-h-screen">
        <!-- Hero Section -->
        <section class="relative bg-gray-900 text-white py-20 px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-4xl font-bold mb-4">Motorcar Insurance</h1>
                <p class="text-lg opacity-90">Drive with peace of mind knowing you're protected.</p>
                <button @click="toggleDetails"
                    class="mt-6 px-6 py-3 bg-gray-700 hover:bg-gray-800 text-white rounded-lg transition-all">
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
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Why Choose Us?</h3>
            <ul class="list-disc ml-6 text-gray-700">
                <li>24/7 Emergency Roadside Assistance</li>
                <li>Fast and Hassle-Free Claims Processing</li>
                <li>Wide Network of Accredited Repair Shops</li>
                <li>Customizable Coverage Plans</li>
            </ul>
            <button @click="toggleDetails"
                class="mt-4 px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-all">
                Close
            </button>
        </section>

        <!-- Call to Action -->
        <section class="text-center py-16 bg-gray-800 text-white mt-12">
            <h2 class="text-3xl font-bold">Get Insured Today!</h2>
            <p class="text-lg opacity-90 mt-2">Contact us now for a free quote on your motorcar insurance.</p>
            <button class="mt-6 px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-all">
                Contact Us
            </button>
        </section>
    </div>
</template>
