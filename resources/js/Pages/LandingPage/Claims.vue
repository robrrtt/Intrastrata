<script setup>
import { ref } from 'vue';
import Header from "@/Components/Header.vue";
import Footer from "@/Components/footer.vue";

const claims = ref([
  { 
    name: "Motor Car", 
    details: "Covers damages, theft, and third-party liability for motor vehicles.", 
    requirements: ["Police Report", "Driver's License", "OR/CR (Official Receipt & Certificate of Registration)", "Photos of Damage"]
  },
  { 
    name: "Fire Claims", 
    details: "Protection against fire damage for residential and commercial properties.", 
    requirements: ["Fire Department Report", "Proof of Ownership (Title/Deed)", "Photos of Damage", "Incident Report"]
  },
  { 
    name: "Microinsurance", 
    details: "Affordable, small-scale insurance coverage for individuals and businesses.", 
    requirements: ["Valid ID", "Proof of Income", "Duly Accomplished Claim Form"]
  },
  { 
    name: "Property Floater", 
    details: "Covers movable property that may not be tied to a fixed location.", 
    requirements: ["Inventory List", "Purchase Receipts", "Incident Report"]
  },
  { 
    name: "Comprehensive General Liability", 
    details: "Protects businesses against liability claims for bodily injury and property damage.", 
    requirements: ["Incident Report", "Medical Certificates (if injury involved)", "Witness Statements"]
  },
  { 
    name: "Marine", 
    details: "Covers goods, ships, and transport risks in marine and cargo operations.", 
    requirements: ["Bill of Lading", "Cargo Manifest", "Surveyor’s Report", "Photos of Damages"]
  }
]);

const selectedClaim = ref(claims.value[0]);

const selectClaim = (claim) => {
  selectedClaim.value = claim;
};
</script>

<template>
  <Header />

  <!-- Hero Section -->
  <section class="bg-slate-900 text-white text-center py-10">
    <h1 class="text-5xl font-bold">Claims</h1>
    <p class="mt-2 text-lg text-gray-300">Select a claim type to view details and requirements</p>
  </section>

  <!-- Claims Section -->
  <div class="container mx-auto px-3 py-5 border border-red-600">

    <!-- Claim List -->
    <div class="flex flex-wrap justify-center gap-2">
      <div 
        v-for="claim in claims" 
        :key="claim.name" 
        @click="selectClaim(claim)"
        class="px-6 py-3 border rounded-lg shadow-md cursor-pointer transition duration-300 ease-in-out text-center min-w-[120px]"
        :class="{
          'bg-gray-900 text-white shadow-lg': selectedClaim.name === claim.name,
          'hover:bg-gray-100': selectedClaim.name !== claim.name
        }"
      >
        <h3 class="text-lg font-semibold">{{ claim.name }}</h3>
      </div>
    </div>

    <!-- Selected Claim Details -->
    <div class="mt-6 p-6 rounded-xl border border-gray-300 shadow-lg bg-white">
      <h3 class="text-3xl font-bold text-gray-900">{{ selectedClaim.name }}</h3>
      <p class="mt-4 text-gray-600">{{ selectedClaim.details }}</p>

      <!-- Requirements -->
      <div class="mt-6">
        <h4 class="text-xl font-semibold text-gray-900">Requirements:</h4>
        <ul class="list-disc list-inside mt-2 text-gray-700 space-y-2">
          <li v-for="requirement in selectedClaim.requirements" :key="requirement">
            {{ requirement }}
          </li>
        </ul>
      </div>
    </div>

  </div>

  <Footer />
</template>

