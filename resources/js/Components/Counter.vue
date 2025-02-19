<script setup>
import { ref, onMounted } from "vue";

const props = defineProps({
  target: Number, // The final number to count to
  duration: Number, // Duration of animation in milliseconds
});

const count = ref(0);

onMounted(() => {
  let startTime = null;
  const animateCount = (timestamp) => {
    if (!startTime) startTime = timestamp;
    const progress = Math.min((timestamp - startTime) / props.duration, 1);
    count.value = Math.floor(progress * props.target);

    if (progress < 1) {
      requestAnimationFrame(animateCount);
    } else {
      count.value = props.target; // Ensure it reaches the final value
    }
  };

  requestAnimationFrame(animateCount);
});
</script>

<template>
  <h2 class="text-3xl font-bold text-orange-600">{{ count.toLocaleString() }}+</h2>
</template>
