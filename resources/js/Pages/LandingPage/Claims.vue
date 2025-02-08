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
  <div class="flex flex-col min-h-screen bg-gray-100">
    <Header />

    <main class="flex-grow container mx-auto px-6 py-10">
      <!-- Hero Section -->
      <section class="bg-slate-900 text-white text-center py-12 rounded-xl shadow-lg">
        <h1 class="text-5xl font-bold">Claims</h1>
        <p class="mt-3 text-lg text-gray-300">
          Select a claim type to view details and requirements
        </p>
      </section>

      <!-- Claims Section -->
      <div class="mt-10 flex flex-col lg:flex-row gap-8">
        <!-- Claim List -->
        <div class="lg:w-1/3 bg-white rounded-xl shadow-lg p-6">
          <h2 class="text-xl font-semibold text-gray-900 mb-4">Claim Types</h2>
          <div class="space-y-3">
            <button 
              v-for="claim in claims" 
              :key="claim.name" 
              @click="selectClaim(claim)"
              class="w-full px-6 py-3 text-left rounded-lg font-medium transition-all duration-300 border-2"
              :class="{
                'bg-gray-900 text-white border-gray-900 shadow-lg': selectedClaim.name === claim.name,
                'bg-white text-gray-900 hover:bg-gray-200 border-gray-300': selectedClaim.name !== claim.name
              }"
            >
              {{ claim.name }}
            </button>
          </div>
        </div>

        <!-- Selected Claim Details -->
        <div class="lg:w-2/3 bg-white rounded-xl shadow-lg p-8">
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
    </main>

    <Footer />
  </div>
</template>
