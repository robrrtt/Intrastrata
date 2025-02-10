<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Corporate from "@/Components/AboutUs/CorporateGovernance.vue";
</script>

<template>
    <Header />

    <Head title="Corporate Governance" />
    <div class="mx-auto max-w-screen">
        <Corporate  />
    </div>
    <Footer />
</template>
