<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Motorcar from "@/Components/Products/MotorCar.vue";
</script>

<template>
    <Header />

    <Head title="MotorCar" />
    <div class="mx-auto max-w-screen">
      <Motorcar/>
    </div>
    <Footer />
</template>
