<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import fire from "@/Components/Products/Fire.vue";
</script>

<template>
    <Header />

    <Head title="Fire" />
    <div class="mx-auto max-w-screen">
      <fire/>
    </div>
    <Footer />
</template>
