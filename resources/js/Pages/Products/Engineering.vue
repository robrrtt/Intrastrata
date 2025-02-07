<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Engineering from "@/Components/Products/Engineering.vue";
</script>

<template>
    <Header />

    <Head title="Engineering" />
    <div class="mx-auto max-w-screen">
      <Engineering/>
    </div>
    <Footer />
</template>
