<script setup>
import { ref } from 'vue';

const coverages = ref([
    { title: 'General Liability Insurance', description: 'Covers bodily injury and property damage claims from third parties.' },
    { title: 'Workers’ Compensation Insurance', description: 'Provides benefits to employees injugray on the job.' },
    { title: 'Professional Liability Insurance', description: 'Protects businesses from claims of negligence or errors.' },
    { title: 'Product Liability Insurance', description: 'Covers legal claims due to defective or harmful products.' },
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
                <h1 class="text-4xl font-bold mb-4">Casualty Lines Insurance</h1>
                <p class="text-lg opacity-90">Protect your business from unexpected legal and liability risks.</p>
                <button @click="toggleDetails"
                    class="mt-6 px-6 py-3 bg-gray-700 hover:bg-gray-800 text-white rounded-lg transition-all">
                    Learn More
                </button>
            </div>
        </section>
 <!-- Additional Details (Expandable) -->
         <section v-if="showDetails"
            class="bg-white shadow-md rounded-lg max-w-4xl mx-auto p-8 mt-4 transition-opacity duration-300">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Why Choose Our Casualty Insurance?</h3>
            <ul class="list-disc ml-6 text-gray-700">
                <li>Comprehensive liability coverage for businesses and individuals</li>
                <li>Protection against legal claims and financial losses</li>
                <li>Customizable policies for various industries</li>
                <li>Quick claims processing to keep your business running smoothly</li>
            </ul>
            <button @click="toggleDetails"
                class="mt-4 px-5 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-all">
                Close
            </button>
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

       

        <!-- Call to Action -->
        <section class="text-center py-16 bg-gray-800 text-white mt-12">
            <h2 class="text-3xl font-bold">Protect Your Business Today!</h2>
            <p class="text-lg opacity-90 mt-2">Get a free consultation on Casualty Insurance.</p>
            <button class="mt-6 px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-all">
                Get a Quote
            </button>
        </section>
    </div>
</template>
