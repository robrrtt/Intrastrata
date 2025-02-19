<script setup>
import { ref } from 'vue';

const bondTypes = ref([
    { title: 'Performance Bond', description: 'Ensures the completion of a project as per the contract terms.' },
    { title: 'Bid Bond', description: 'Guarantees that a bidder will honor their bid if awarded the contract.' },
    { title: 'Payment Bond', description: 'Guarantees the payment of subcontractors and suppliers in a project.' },
    { title: 'Custom Bond', description: 'Tailored to specific client needs for unique obligations.' }
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
                <h1 class="text-4xl font-bold mb-4">Bonds Insurance</h1>
                <p class="text-lg opacity-90">Securing your financial commitments with ease.</p>
                <button @click="toggleDetails"
                    class="mt-6 px-6 py-3 bg-gray-700 hover:bg-gray-800 text-white rounded-lg transition-all">
                    Learn More
                </button>
            </div>
        </section>
        <section v-if="showDetails"
            class="bg-white shadow-md rounded-lg max-w-4xl mx-auto p-8 mt-4 transition-opacity duration-300">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Why Choose Bonds Insurance?</h3>
            <ul class="list-disc ml-6 text-gray-700">
                <li>Protects you from financial risks in contract execution.</li>
                <li>Ensures compliance with legal and contractual obligations.</li>
                <li>Helps in securing trust and improving business relationships.</li>
                <li>Offers peace of mind in large and complex projects.</li>
            </ul>
            <button @click="toggleDetails"
                class="mt-4 px-5 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-all">
                Close
            </button>
        </section>
        <!-- Bond Types -->
        <section class="py-16 px-6 max-w-5xl mx-auto">
            <h2 class="text-3xl font-semibold text-center text-gray-900 mb-8">Types of Bonds We Offer</h2>
            <div class="grid sm:grid-cols-2 gap-6">
                <div v-for="(bond, index) in bondTypes" :key="index"
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                    <h3 class="text-xl font-semibold text-gray-700">{{ bond.title }}</h3>
                    <p class="text-gray-600">{{ bond.description }}</p>
                </div>
            </div>
        </section>

        <!-- Additional Details (Expandable) -->
        

        <!-- Call to Action -->
        <section class="text-center py-16 bg-gray-800 text-white mt-12">
            <h2 class="text-3xl font-bold">Secure Your Business Today!</h2>
            <p class="text-lg opacity-90 mt-2">Contact us now for a tailored Bonds Insurance solution.</p>
            <button class="mt-6 px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-all">
                Get a Quote
            </button>
        </section>
    </div>
</template>
