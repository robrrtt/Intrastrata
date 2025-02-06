<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Footer from "@/Components/footer.vue";

import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";

// Job Listings (Example Data)
const jobs = ref([
    { title: "Claims Adjuster", location: "Makati, Philippines", description: "Evaluate and process claims." },
    { title: "Insurance Underwriter", location: "Quezon City, Philippines", description: "Analyze risk and issue policies." },
    { title: "Sales Executive", location: "Remote", description: "Engage clients and sell insurance products." },
]);

// Form Handling
const form = useForm({
    name: "",
    email: "",
    resume: null,
    message: "",
});

// File Handling
const handleFileUpload = (event) => {
    form.resume = event.target.files[0];
};

// Submit Form
const submitForm = () => {
    form.post("/apply", {
        onSuccess: () => alert("Application submitted successfully!"),
    });
};
</script>

<template>
    <Header />
    <Head title="Join Us" />

    <!-- Hero Section -->

    <section class="bg-slate-900 text-white text-center py-10">
        <h1 class="text-5xl font-bold">Join Our Team</h1>
        <p class="mt-2 text-lg text-slate-300">Select a claim type to view details and requirements</p>
  </section>

    <!-- Careers Section -->
    <div class="max-w-6xl mx-auto px-6 py-12">
        <h2 class="text-3xl font-semibold text-slate-800 mb-6">Open Positions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div v-for="(job, index) in jobs" :key="index" class="bg-white shadow-lg border border-slate-200 p-6 rounded-lg hover:shadow-xl transition">
                <h3 class="text-xl font-semibold text-slate-800">{{ job.title }}</h3>
                <p class="text-slate-500">{{ job.location }}</p>
                <p class="mt-2 text-sm text-slate-600">{{ job.description }}</p>
                <button class="mt-4 w-full bg-slate-900 text-white py-2 rounded-lg hover:bg-slate-700 transition">
                    Apply Now
                </button>
            </div>
        </div>
    </div>

    <!-- Application Form -->
    <div class="bg-white shadow-md border border-slate-200 p-8 max-w-3xl mx-auto rounded-lg mt-12">
        <h2 class="text-3xl font-semibold text-slate-800">Apply Now</h2>
        <p class="text-slate-600 mb-4">Fill out the form below to apply for a position.</p>
        <form @submit.prevent="submitForm" class="space-y-4">
            <input v-model="form.name" type="text" placeholder="Full Name" class="w-full p-3 border rounded-lg text-slate-800 border-slate-300 focus:ring focus:ring-slate-300" required />
            <input v-model="form.email" type="email" placeholder="Email Address" class="w-full p-3 border rounded-lg text-slate-800 border-slate-300 focus:ring focus:ring-slate-300" required />
            <input type="file" @change="handleFileUpload" class="w-full p-3 border rounded-lg border-slate-300 text-slate-700" required />
            <textarea v-model="form.message" placeholder="Tell us why you're a good fit" class="w-full p-3 border rounded-lg text-slate-800 border-slate-300 focus:ring focus:ring-slate-300"></textarea>
            <button type="submit" class="w-full bg-slate-900 text-white py-3 rounded-lg hover:bg-slate-700 transition">
                Submit Application
            </button>
        </form>
    </div>
    <Footer />

</template>
