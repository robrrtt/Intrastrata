<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import Footer from "@/Components/footer.vue";
import axios from 'axios';
import Swal from 'sweetalert2';

const form = ref({
    name: '',
    contact_no: '',
    email: '',
    message: '',
    file: null,
});

const message = ref(null);

const handleFileUpload = (event) => {
    form.value.file = event.target.files[0];
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('contact_no', form.value.contact_no);
    formData.append('email', form.value.email);
    formData.append('message', form.value.message);

    if (form.value.file) {
        formData.append('file', form.value.file);
    }

    try {
        await axios.post('/inquiries', formData);
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Your inquiry has been submitted successfully!',
            timer: 3000,
            showConfirmButton: false,
        });
        form.value = { name: '', contact_no: '', email: '', message: '', file: null };
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'There was an error submitting your inquiry. Please try again later.',
        });
    }
};

const formatContact = () => {
    let numbers = form.value.contact_no.replace(/\D/g, '');
    if (numbers.length > 12) {
        numbers = numbers.substring(0, 12);
    }
    if (numbers.startsWith('09') && numbers.length > 2) {
        form.value.contact_no = numbers.replace(/^(\d{4})(\d{3})(\d{4})$/, '$1-$2-$3');
    } else if (numbers.startsWith('0') && numbers.length >= 7) {
        if (numbers.startsWith('02')) {
            form.value.contact_no = numbers.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
        } else {
            form.value.contact_no = numbers.replace(/^(\d{3})(\d{3})(\d{4})$/, '($1) $2-$3');
        }
    } else {
        form.value.contact_no = numbers;
    }
    if (form.value.contact_no.length > 13) {
        form.value.contact_no = form.value.contact_no.substring(0, 13);
    }
};
</script>

<template>
    <Header />
    <Head title="Talk to Us" />
    <div class="bg-gray-900 text-white text-center py-10">
        <h1 class="text-5xl font-bold">Talk to Us</h1>
        <p class="mt-2 text-lg text-gray-300">We’re here to help. Get in touch with us today.</p>
    </div>
    <div class="max-w-3xl mx-auto bg-white shadow-lg p-8 rounded-lg mt-12">
        <h2 class="text-3xl font-semibold text-gray-800 text-center">Contact Us</h2>
        <p class="text-gray-600 text-center mb-6">Fill out the form below, and we’ll get back to you as soon as possible.</p>
        <form @submit.prevent="submitForm" class="space-y-4">
            <input v-model="form.name" type="text" placeholder="Name" class="w-full p-3 border rounded-lg text-gray-800 border-gray-300 focus:ring focus:ring-gray-300" required />
            <input v-model="form.contact_no" type="text" placeholder="Contact No." class="w-full p-3 border rounded-lg text-gray-800 border-gray-300 focus:ring focus:ring-gray-300" required @input="formatContact" />
            <input v-model="form.email" type="email" placeholder="Email" class="w-full p-3 border rounded-lg text-gray-800 border-gray-300 focus:ring focus:ring-gray-300" required />
            <textarea v-model="form.message" placeholder="Message" class="w-full p-3 border rounded-lg text-gray-800 border-gray-300 focus:ring focus:ring-gray-300" rows="5"></textarea>
            <button type="submit" class="w-full bg-gray-900 text-white py-3 rounded-lg hover:bg-gray-700 transition">Send Message</button>
        </form>
    </div>
    <div class="max-w-6xl mx-auto px-6 py-12 text-center">
        <h2 class="text-3xl font-semibold text-gray-800">Our Contact Details</h2>
        <p class="text-gray-600 mt-2">Reach us through any of the following channels.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white shadow-lg p-6 rounded-lg hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-gray-800">📍 Address</h3>
                <p class="text-gray-600">8F/88 Corporate Center Building, Makati City</p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-lg hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-gray-800">📞 Phone</h3>
                <p class="text-gray-600">Tel: 8-817.3031 - 34 & 45</p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-lg hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-gray-800">📧 Email</h3>
                <p class="text-gray-600">intrastrata@gmail.com</p>
            </div>
        </div>
    </div>
    <Footer />
</template>
