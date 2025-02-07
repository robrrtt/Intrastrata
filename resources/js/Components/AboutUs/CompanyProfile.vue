<script setup>
const coreValues = [
    { title: "Integrity", description: "With transparency, we conduct ourselves ethically and honestly in everything we do." },
    { title: "Service Excellence", description: "Providing the highest quality services, meeting our client's needs efficiently and promptly at par with industry standards." },
    { title: "Adaptability", description: "Flexibility in meeting changes and challenges in the ever-evolving business environment." },
    { title: "Commitment", description: "We fully serve our stockholders by providing fair, equitable and just returns with unwavering commitment and dedication." }
];
</script>

<template>
    <div>
        <!-- Hero Section -->
        <div class="bg-slate-900 text-white text-center py-10">
            <h1 class="text-5xl font-bold">Company Profile</h1>
            <p class="mt-2 text-lg text-slate-300">Intrastata Assurance Corporation</p>
        </div>

        <div class="container mx-auto px-6 md:px-12 py-12">
            <!-- History Section -->
            <section class="bg-white p-6 md:p-10 rounded-3xl shadow-xl mb-8 border-l-8 border-gray-900">
                <h2 class="text-3xl font-semibold text-gray-800">History</h2>
                <p class="mt-3 text-gray-900 leading-relaxed">
                    INTRASTRATA ASSURANCE CORPORATION is one of the country's leading and oldest non-life insurance
                    companies.
                    It was established on <strong>September 8, 1959</strong> as Overseas Insurance Company. In 1987, it
                    changed
                    its name but maintained its tradition of providing excellent service. The company has a strong
                    record in
                    re-insurance and claims processing.
                </p>
            </section>

            <!-- Mission & Vision -->
            <div class="grid md:grid-cols-2 gap-6">
                <section class="bg-white p-6 md:p-10 rounded-3xl shadow-xl border-l-8 border-gray-900 hover:scale-105 transition-transform duration-300">
                    <h2 class="text-3xl font-semibold text-gray-900">Mission</h2>
                    <p class="mt-3 text-gray-900 leading-relaxed">
                        We seek to develop and maintain long-term relationships with our clients, providing high-quality
                        service
                        and enhancing our reputation by offering tailored insurance solutions.
                    </p>
                </section>

                <section class="bg-white p-6 md:p-10 rounded-3xl shadow-xl border-l-8 border-gray-900 hover:scale-105 transition-transform duration-300">
                    <h2 class="text-3xl font-semibold text-gray-900">Vision</h2>
                    <p class="mt-3 text-gray-900 leading-relaxed">
                        We aim to be the most valued business partner for our clients, leading in customer satisfaction,
                        integrity,
                        and sustainable growth in the insurance industry.
                    </p>
                </section>
            </div>

            <!-- Core Values -->
            <section class="mt-12">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-6">Core Values</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div v-for="(value, index) in coreValues" :key="index"
                        class="bg-white p-6 rounded-3xl shadow-xl border-t-4 border-gray-900 hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-gray-900">
                            <span class="text-4xl text-gray-900 font-extrabold drop-shadow-md">{{
                                value.title.charAt(0) }}</span>
                            {{ value.title.slice(1) }}
                        </h3>
                        <p class="mt-2 text-gray-900">{{ value.description }}</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>
