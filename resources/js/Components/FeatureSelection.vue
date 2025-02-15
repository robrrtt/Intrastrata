<script setup>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { useMotion } from "@vueuse/motion";
import { ref, onMounted } from "vue";

const features = [
    { icon: ["fas", "handshake"], title: "Trusted Insurance Company", text: "Lorem Ipsum is simply dummy text of the printing and industry." },
    { icon: ["fas", "users"], title: "Dedicated Support and Security", text: "Lorem Ipsum is simply dummy text of the printing and industry." },
    { icon: ["fas", "money-bill-wave"], title: "No Policy Fees", text: "Lorem Ipsum is simply dummy text of the printing and industry." },
    { icon: ["fas", "shield-alt"], title: "Moneyback Guarantee", text: "Lorem Ipsum is simply dummy text of the printing and industry." },
];

const leftContent = ref(null);
const ctaSection = ref(null);
const featureRefs = ref([]);

onMounted(() => {
    useMotion(leftContent.value, {
        initial: { opacity: 0, x: -50 },
        enter: { opacity: 1, x: 0, transition: { duration: 0.7 } },
    });

    useMotion(ctaSection.value, {
        initial: { opacity: 0, x: 50 },
        enter: { opacity: 1, x: 0, transition: { duration: 0.7 } },
    });

    featureRefs.value.forEach((el, index) => {
        useMotion(el, {
            initial: { opacity: 0, y: 30 },
            enter: { opacity: 1, y: 0, transition: { delay: index * 0.2, duration: 0.5 } },
        });
    });
});
</script>

<template>
    <section class="container mx-auto px-6 py-12">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Left Content (Slide In) -->
            <div ref="leftContent" class="md:w-1/2 text-left space-y-4">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 uppercase">
                    Protect What You Own, Secure Your Future.
                </h2>
                <p class="text-gray-600">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <button
                    class="bg-gray-700 text-white px-6 py-3 rounded-md hover:bg-gray-800 hover:scale-105 transition-transform duration-300"
                >
                    Learn More
                </button>
            </div>

            <!-- Right Feature Cards (Fade In with Staggered Effect) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8 md:mt-0">
                <div
                    v-for="(feature, index) in features"
                    :key="index"
                    ref="featureRefs"
                    class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center transition-transform duration-300 hover:scale-105"
                >
                    <div class="flex justify-center items-center w-16 h-16 bg-gray-100 rounded-full mx-auto mb-4">
                        <font-awesome-icon :icon="feature.icon" class="text-gray-700 text-2xl" />
                    </div>
                    <h5 class="text-lg font-semibold text-gray-900">
                        {{ feature.title }}
                    </h5>
                    <p class="text-sm text-gray-600 mt-2">
                        {{ feature.text }}
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA Section (Slide In) -->
        <div ref="ctaSection" class="bg-gray-100 p-6 rounded-lg mt-12 flex flex-col md:flex-row justify-between items-center">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">
                    Suggestion which insurance plan to pick?
                </h3>
                <p class="text-sm text-gray-600">
                    It is a long established fact that a reader will be distracted by the readable content of a page.
                </p>
            </div>
            <button
                class="bg-gray-700 text-white px-6 py-3 rounded-md hover:bg-gray-800 hover:scale-105 transition-transform duration-300 mt-4 md:mt-0"
            >
                Know More →
            </button>
        </div>
    </section>
</template>
