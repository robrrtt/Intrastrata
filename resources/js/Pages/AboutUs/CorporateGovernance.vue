<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Corporate from "@/Components/AboutUs/CorporateGovernance.vue";
import { ref, onMounted } from "vue";

const files = ref([]);

const fetchFiles = () => {
    fetch("/files")
        .then(response => response.json())
        .then(data => (files.value = data))
        .catch(error => console.error("Error fetching files:", error));
        console.log(files)
};

onMounted(fetchFiles);
</script>

<template>
    <Header />

    <Head title="Corporate Governance" />
    <div class="mx-auto max-w-screen">
        
        <Corporate />
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-lg font-semibold mb-4">Company Files</h2>

            <div v-if="files.length" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div v-for="file in files" :key="file.id"
                    class="p-4 border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
                    <p class="text-sm text-gray-500">File ID: <span class="font-semibold">{{ file.id }}</span></p>
                    <h3 class="text-md font-medium text-gray-900 mt-1 truncate">{{ file.name }}</h3>

                    <a :href="`/download/${file.id}`"
                        class="mt-2 inline-block text-sm text-blue-600 hover:text-blue-800 font-semibold transition">
                        Download
                    </a>
                </div>
            </div>

            <p v-else class="text-gray-600">No files uploaded.</p>
        </div>
    </div>
    <Footer />
</template>
