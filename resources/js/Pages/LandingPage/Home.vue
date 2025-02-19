<script setup>
import { ref, onMounted } from "vue";
import { Head } from "@inertiajs/vue3";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/footer.vue";
import Carousell from "@/Components/carousell.vue";
import Products from "@/Components/Products.vue";
import FeatureSelection from "@/Components/FeatureSelection.vue";

const featureSelectionRef = ref(null);
const aboutRef = ref(null);

onMounted(() => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("opacity-100", "translate-y-0");
                entry.target.classList.remove("opacity-0", "translate-y-10");
            }
        });
    }, { threshold: 0.3 });

    if (featureSelectionRef.value) observer.observe(featureSelectionRef.value);
    if (aboutRef.value) observer.observe(aboutRef.value);
});
</script>

<template>
    <Header />
    <Head title="About Us" />

    <div class="mx-auto max-w-screen bg-gray-50">
        <div class="overflow-hidden bg-white">
            <Carousell />
        </div>
        <div ref="aboutRef" class="flex flex-col md:flex-row items-center bg-white  overflow-hidden transition-all duration-1000 opacity-0 translate-y-10  p-6">
            <!-- Image Section -->
            <div class="md:w-1/2">
                <img src="/img/Designer(4).jpeg" alt="About Us" class="w-full h-full object-cover rounded-lg" />
            </div>

            <!-- Content Section -->
            <div class="md:w-1/2 p-8">
                <h3 class="text-orange-500 font-semibold text-lg mb-2">— About Company —</h3>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    Committed & Experienced in <span class="text-orange-600">Non-Life Insurance</span>
                </h1>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    With over 60 years of experience since 1959, Intrastrata Assurance Corporation is a trusted leader in non-life insurance. Committed to excellence, we have built a strong reputation through reliable reinsurance partnerships and efficient claims processing, ensuring security and confidence for our clients.
                </p>

                <!-- Stats Section -->
                <div class="flex gap-8 mt-6">
                    <div>
                        <h2 class="text-3xl font-bold text-orange-600">60+</h2>
                        <p class="text-gray-600 text-sm">Years of Excellence</p>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-orange-600">650,051+</h2>
                        <p class="text-gray-600 text-sm">Satisfied Clients</p>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-orange-600">850,051+</h2>
                        <p class="text-gray-600 text-sm">Completed Projects</p>
                    </div>
                </div>

                <!-- Button -->
                <button class="mt-6 bg-orange-600 text-white px-6 py-3 rounded-lg text-lg font-semibold flex items-center hover:bg-orange-800 transition-all">
                    About us
                    <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </button>
            </div>
        </div>

        <Products class="p-2" />

        <!-- About Section with Animation -->
               <!-- Feature Selection Section -->
               <div ref="featureSelectionRef" class="transition-all duration-1000 opacity-0 translate-y-10">
            <FeatureSelection />
        </div>
    </div>

    <Footer />
</template>
