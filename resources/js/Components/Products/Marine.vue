<script setup>
import { ref } from 'vue';

const coverages = ref([
    { title: 'Cargo Insurance', description: 'Covers loss or damage to goods during transit by sea, air, or land.' },
    { title: 'Hull & Machinery Insurance', description: 'Protects vessels and their machinery from damages or loss.' },
    { title: 'Marine Liability Insurance', description: 'Covers liabilities for damages caused by ships or cargo operations.' },
    { title: 'Freight Insurance', description: 'Protects freight revenue against losses due to cargo damage or delays.' }
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
                <h1 class="text-4xl font-bold mb-4">Marine Lines Insurance</h1>
                <p class="text-lg opacity-90">Ensure your cargo and vessels are protected across all seas.</p>
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
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Why Choose Our Marine Insurance?</h3>
            <ul class="list-disc ml-6 text-gray-700">
                <li>Comprehensive protection for cargo, vessels, and marine operations</li>
                <li>Flexible policies tailored to your shipping needs</li>
                <li>Fast claims processing for cargo loss or damages</li>
                <li>Global coverage for seamless marine trade protection</li>
            </ul>
            <button @click="toggleDetails"
                class="mt-4 px-5 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-all">
                Close
            </button>
        </section>

        <!-- Call to Action -->
        <section class="text-center py-16 bg-gray-800 text-white mt-12">
            <h2 class="text-3xl font-bold">Secure Your Marine Assets Today!</h2>
            <p class="text-lg opacity-90 mt-2">Get a free Marine Lines insurance consultation now.</p>
            <button class="mt-6 px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-all">
                Get a Quote
            </button>
        </section>
    </div>
</template>
