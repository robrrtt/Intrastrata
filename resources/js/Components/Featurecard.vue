<script setup>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

// Define props directly (no need for `props` variable)
defineProps({
  icon: [String, Array], // Accept both string and array
  title: String,
  text: String,
});
</script>

<template>
  <div
    class="w-full md:w-56 p-6 bg-white border border-gray-200 rounded-lg shadow-md transition hover:shadow-lg animate-fadeInUp"
  >
    <div class="flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
      <FontAwesomeIcon :icon="icon" class="text-green-700 text-2xl" />
    </div>
    <h5 class="mb-2 text-lg font-semibold text-gray-900 text-center">
      {{ title }}
    </h5>
    <p class="text-sm text-gray-600 text-center">
      {{ text }}
    </p>
  </div>
</template>
