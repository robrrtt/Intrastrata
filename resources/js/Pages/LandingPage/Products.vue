<script setup>
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "@/Components/footer.vue";
import Carousell from "@/Components/carousell.vue";
import ProductsPage from "@/Components/ProductsPage.vue";

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faHouseFire, faCar, faScaleBalanced, faShip, faGear, faUserInjured } from '@fortawesome/free-solid-svg-icons';

</script>

<template>
     <Header />

<Head title="Product" />
<div class="mx-auto max-w-screen ">
            <ProductsPage/>
          
        </div>
    <Footer />
</template>
