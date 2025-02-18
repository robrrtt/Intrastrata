<template>
    <div class=" bg-gray-100 flex items-center justify-center p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl w-full p-6 bg-white shadow-md rounded-lg">
            <!-- Form Section -->
            <div class="w-full ">
                <!-- Tabs -->
                <div class=" border-b mb-4">
                    <button v-for="tab in tabs" :key="tab" @click="activeTab = tab" :class="[
                        'py-2 px-4 text-gray-600',
                        activeTab === tab ? 'border-b-2 border-green-600 text-black font-semibold' : ''
                    ]">
                        {{ tab }}
                    </button>
                </div>

                <!-- Form -->
                <p class="text-gray-500 mb-4">
                    It is a long-established fact that a reader will be distracted.
                </p>
                <form @submit.prevent="submitForm">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Fullname</label>
                        <input v-model="form.fullname" type="text" placeholder="Enter your fullname"
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-green-200" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input v-model="form.email" type="email" placeholder="Enter your email"
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-green-200" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Property Type</label>
                        <select v-model="form.propertyType"
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-green-200">
                            <option value="" disabled>Select a property type</option>
                            <option value="Car">Car</option>
                            <option value="Home">Home</option>
                            <option value="Life">Life</option>
                            <option value="Health">Health</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="w-full bg-green-700 text-white py-2 rounded-md hover:bg-green-800 transition">
                        START SAVING TODAY
                    </button>
                </form>
            </div>

            <!-- Image Section -->
            <div class="flex justify-center items-center border border-blue-700">
                <img src="/img/Intrastrata-final.gif" class="w-48 md:w-64 lg:w-80" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";

const tabs = ["Fire and Allied Perils","Motor Car","Casualty","Engineering","Surety"];
const activeTab = ref("CAR");

const form = ref({
    fullname: "",
    email: "",
    propertyType: ""
});

const submitForm = async () => {
    try {
        await axios.post("/api/save-form", form.value);
        alert("Form submitted successfully!");
        form.value = { fullname: "", email: "", propertyType: "" }; // Reset form
    } catch (error) {
        console.error("Error submitting form", error);
    }
};
</script>
