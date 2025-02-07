<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import CompanyProfile from "@/Components/AboutUs/CompanyProfile.vue";
</script>

<template>
    <Header />

    <Head title="CompanyProfile" />
    <div class="mx-auto max-w-screen">
        <CompanyProfile  />
    </div>
    <Footer />
</template>
