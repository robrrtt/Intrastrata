<template>
    <div class="max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-center mb-6">Inquiry Form</h2>
        <form @submit.prevent="submitForm" class="space-y-4">
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium text-gray-700">Name:</label>
                <input type="text" v-model="form.name" id="name" required
                    class="mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            </div>

            <div class="flex flex-col">
                <label for="contact_no" class="text-sm font-medium text-gray-700">Contact No.:</label>
                <input type="text" v-model="form.contact_no" id="contact_no" required
                    class="mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            </div>

            <div class="flex flex-col">
                <label for="email" class="text-sm font-medium text-gray-700">Email:</label>
                <input type="email" v-model="form.email" id="email" required
                    class="mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            </div>

            <div class="flex flex-col">
                <label for="message" class="text-sm font-medium text-gray-700">Message:</label>
                <textarea v-model="form.message" id="message" required
                    class="mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    rows="4"></textarea>
            </div>

            <!-- File Upload -->
            <div class="flex flex-col">
                <label for="file" class="text-sm font-medium text-gray-700">Attach File (PDF/Image):</label>
                <input type="file" @change="handleFileUpload" id="file" accept="application/pdf, image/*" class="mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Submit Inquiry
            </button>
        </form>

        <p v-if="message" class="mt-4 text-center text-green-600">{{ message }}</p>
    </div>

    <button @click="showSweetAlert" 
            class="mt-4 w-full py-2 px-4 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
            Show SweetAlert
        </button>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import Swal from 'sweetalert2';
const form = ref({
    name: '',
    contact_no: '',
    email: '',
    message: '',
    file: null, // For storing the uploaded file
});

const message = ref(null);

// Handle the file upload
const handleFileUpload = (event) => {
    form.value.file = event.target.files[0]; // Save the selected file
};
const showSweetAlert = () => {
    Swal.fire({
        icon: 'info',
        title: 'Hello!',
        text: 'This is a SweetAlert popup!',
        confirmButtonColor: '#3085d6'
    });
};
const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('contact_no', form.value.contact_no);
    formData.append('email', form.value.email);
    formData.append('message', form.value.message);

    if (form.value.file) {
        formData.append('file', form.value.file); // Append the file to the FormData
    }

    try {
        await axios.post('/inquiries', formData);
        message.value = 'Your inquiry has been submitted successfully!';
        form.value = { name: '', contact_no: '', email: '', message: '', file: null }; // Reset form
    } catch (error) {
        message.value = 'There was an error submitting your inquiry.';
    }
};
</script>
