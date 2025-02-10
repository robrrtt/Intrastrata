<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Branch from "@/Components/AboutUs/BranchandAgencies.vue";
</script>

<template>
    <Header />

    <Head title="Branch And Agencies" />
    <div class="mx-auto max-w-screen">
        <Branch  />
    </div>
    <Footer />
</template>
