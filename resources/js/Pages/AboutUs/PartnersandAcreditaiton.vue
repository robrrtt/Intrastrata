<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Partners from "@/Components/AboutUs/PartnersandAcreditation.vue";
</script>

<template>
    <Header />

    <Head title="Partners acreditation" />
    <div class="mx-auto max-w-screen">
        <Partners  />
    </div>
    <Footer />
</template>
