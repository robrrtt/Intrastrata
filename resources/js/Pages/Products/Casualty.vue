<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Casualty from "@/Components/Products/Casualty.vue";
</script>

<template>
    <Header />

    <Head title="Casualty" />
    <div class="mx-auto max-w-screen">
      <Casualty/>
    </div>
    <Footer />
</template>
