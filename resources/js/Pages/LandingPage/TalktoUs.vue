<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Swal from 'sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

// Form Handling
const form = useForm({
    name: "",
    email: "",
    subject: "",
    message: "",
});

// Submit Form
const submitForm = () => {
    form.post("/contact", {
        onSuccess: () => {
            Swal.fire({
                title: "Success!",
                text: "Your message has been sent!",
                icon: "success",
                confirmButtonText: "OK",
            });
            form.reset(); //clear form is success
        },
        onError: () => {
            Swal.fire({
                title: "Error!",
                text: "Something went wrong. Please try again.",
                icon: "error",
                confirmButtonText: "Retry",
            });
        }
    });
};
</script>

<template>
    <Header />
    <Head title="Talk to Us" />

    <!-- Hero Section -->
    <div class="bg-slate-900 text-white text-center py-10">
        <h1 class="text-5xl font-bold">Talk to Us</h1>
        <p class="mt-2 text-lg text-slate-300">We’re here to help. Get in touch with us today.</p>
    </div>


    <!-- Contact Form Section -->
    <div class="max-w-3xl mx-auto bg-white shadow-md border border-slate-200 p-8 rounded-lg mt-12">
        <h2 class="text-3xl font-semibold text-slate-800 text-center">Contact Us</h2>
        <p class="text-slate-600 text-center mb-6">Fill out the form below, and we’ll get back to you as soon as possible.</p>

        <form @submit.prevent="submitForm" class="space-y-4">
            <input v-model="form.name" type="text" placeholder="Your Name" class="w-full p-3 border rounded-lg text-slate-800 border-slate-300 focus:ring focus:ring-slate-300" required />
            <input v-model="form.email" type="email" placeholder="Your Email" class="w-full p-3 border rounded-lg text-slate-800 border-slate-300 focus:ring focus:ring-slate-300" required />
            <input v-model="form.subject" type="text" placeholder="Subject" class="w-full p-3 border rounded-lg text-slate-800 border-slate-300 focus:ring focus:ring-slate-300" required />
            <textarea v-model="form.message" placeholder="Your Message" class="w-full p-3 border rounded-lg text-slate-800 border-slate-300 focus:ring focus:ring-slate-300" rows="5"></textarea>
            <button type="submit" class="w-full bg-slate-900 text-white py-3 rounded-lg hover:bg-slate-700 transition">
                Send Message
            </button>
        </form>
    </div>

    <!-- Contact Details -->
    <div class="max-w-6xl mx-auto px-6 py-12 text-center">
        <h2 class="text-3xl font-semibold text-slate-800">Our Contact Details</h2>
        <p class="text-slate-600 mt-2">Reach us through any of the following channels.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white shadow-lg border border-slate-200 p-6 rounded-lg hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-slate-800">📍 Address</h3>
                <p class="text-slate-600">123 Business St., Makati, Philippines</p>
            </div>
            <div class="bg-white shadow-lg border border-slate-200 p-6 rounded-lg hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-slate-800">📞 Phone</h3>
                <p class="text-slate-600">+63 912 345 6789</p>
            </div>
            <div class="bg-white shadow-lg border border-slate-200 p-6 rounded-lg hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-slate-800">📧 Email</h3>
                <p class="text-slate-600">support@intrastrata.com</p>
            </div>
        </div>
    </div>

  
    <Footer />

</template>
