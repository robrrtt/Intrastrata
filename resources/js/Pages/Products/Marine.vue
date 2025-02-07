<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import MarineLines from "@/Components/Products/Marine.vue";
</script>

<template>
    <Header />

    <Head title="MarineLines" />
    <div class="mx-auto max-w-screen">
      <MarineLines/>
    </div>
    <Footer />
</template>
