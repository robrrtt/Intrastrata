<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Carousell from "@/Components/carousell.vue";
import FileUpload from "@/Pages/Admin/FileUpload.vue";

import { ref, onMounted } from "vue";

const files = ref([]);

const fetchFiles = () => {
    fetch("/files")
        .then(response => response.json())
        .then(data => (files.value = data))
        .catch(error => console.error("Error fetching files:", error));
};

onMounted(fetchFiles);

</script>

<template>
    <Head title="AboutUs" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <Carousell />
                </div>
                <div class="flex items-center justify-center">
                    <div class="text-white p-4">
                        <h1
                            class="text-4xl font-extrabold leading-tight text-gray-800 uppercase"
                        >
                            Intrastrata Assurance Corporation
                        </h1>
                    </div>
                </div>
                <FileUpload/>
                <div class="border border-red-600">
                    <h2
                        class="text-xl font-semibold leading-tight text-gray-800"
                    >
                        About Us
                    </h2>
                    <div class="grid grid-cols-3 gap-4 m-4">
                        <div class="border border-red-600 col-span-2 ...">
                            <div class="p-6 bg-white rounded-lg shadow-md">
                                <h2 class="text-lg font-semibold mb-4">Uploaded PDFs</h2>

                                <div v-if="files.length" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <div v-for="file in files" :key="file.id" class="p-4 border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
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
                        <div class="border border-red-600 ...">
                            <article>
                                <p class="overflow-hidden text-clip">
                                    INTRASTRATA ASSURANCE CORPORATION is one of
                                    the country's leading and oldest Non-Life
                                    Insurance Company. It was stablished on
                                    September 8, 1959 and was formerly known as
                                    Overseas Insurance Company. .
                                </p>
                            </article>
                        </div>
                        <div class="border border-red-600 ...">02</div>
                        <div class="border border-red-600 ...">03</div>
                        <div class="border border-red-600 ...">05</div>
                        <div class="border border-red-600 ...">06</div>
                        <div class="border border-red-600col-span-2 ...">
                            07
                        </div>
                    </div>
                    <h2
                        class="text-xl font-semibold leading-tight text-gray-800"
                    >
                        About Us
                    </h2>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
