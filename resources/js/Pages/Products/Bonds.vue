<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import bonds from "@/Components/Products/Bonds.vue";
</script>

<template>
    <Header />

    <Head title="Fire" />
    <div class="mx-auto max-w-screen">
      <bonds/>
    </div>
    <Footer />
</template>
