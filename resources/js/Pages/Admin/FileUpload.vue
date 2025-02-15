<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";

const file = ref(null);
const successMessage = ref("");

const uploadFile = () => {
    if (!file.value) {
        alert("Please select a file");
        return;
    }

    let formData = new FormData();
    formData.append("file", file.value);

    fetch("/upload", {
        method: "POST",
        body: formData,
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
        },
    })
        .then(response => response.json())
        .then(data => {
            successMessage.value = data.message;
            file.value = null;
        })
        .catch(error => console.error("Upload failed:", error));
};
</script>

<template>
    <div class="p-6 bg-white rounded shadow-md">
        <h2 class="text-lg font-semibold mb-4">Upload PDF</h2>
        <input type="file" @change="(e) => (file = e.target.files[0])" class="mb-2" />
        <button @click="uploadFile" class="px-4 py-2 bg-blue-600 text-white rounded">Upload</button>
        <p v-if="successMessage" class="text-green-600 mt-2">{{ successMessage }}</p>
    </div>
</template>
