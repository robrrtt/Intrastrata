<script setup>
const governanceStructure = {
    "Board of Directors": [
        { name: "John Doe", position: "Chairman" },
        { name: "Jane Smith", position: "Vice Chairperson" },
        { name: "Robert Johnson", position: "Independent Director" },
        { name: "Emily Davis", position: "Executive Director" },
        { name: "Michael Brown", position: "Non-Executive Director" }
    ],
    "Executive Leadership": [
        { name: "Alice Carter", position: "Chief Executive Officer (CEO)" },
        { name: "David White", position: "Chief Financial Officer (CFO)" },
        { name: "Sophia Martinez", position: "Chief Operating Officer (COO)" },
        { name: "James Wilson", position: "Chief Technology Officer (CTO)" },
        { name: "Olivia Taylor", position: "Chief Compliance Officer (CCO)" }
    ],
    "Corporate Committees": {
        "Audit Committee": [
            "Robert Johnson (Chairperson)",
            "Jane Smith",
            "Michael Brown"
        ],
        "Risk Management Committee": [
            "Emily Davis (Chairperson)",
            "David White",
            "James Wilson"
        ],
        "Nomination & Remuneration Committee": [
            "John Doe (Chairperson)",
            "Sophia Martinez",
            "Olivia Taylor"
        ]
    }
};
</script>

<template>
    <div class="bg-slate-900 text-white text-center py-10">
        <h1 class="text-5xl font-bold">Corporate Governance</h1>
        <p class="mt-2 text-lg text-slate-300">Ensuring transparency, integrity, and accountability.</p>
    </div>

    <div class="bg-gray-100 py-10">
        <div class="max-w-6xl mx-auto px-6">
            <div v-for="(members, category) in governanceStructure" :key="category" class="mt-10">
                <h2 class="text-3xl font-semibold text-gray-800 border-b-4 border-gray-900 pb-2">
                    {{ category }}
                </h2>
                
                <div v-if="Array.isArray(members)" class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    <div v-for="(member, index) in members" :key="index"
                        class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-gray-800">
                        <p class="text-gray-700 font-medium">{{ member.name }}</p>
                        <p class="text-gray-500 text-sm">{{ member.position }}</p>
                    </div>
                </div>

                <div v-else class="mt-4">
                    <div v-for="(committeeMembers, committeeName) in members" :key="committeeName" class="mt-6">
                        <h3 class="text-2xl font-semibold text-gray-700">{{ committeeName }}</h3>
                        <ul class="mt-2 list-disc list-inside text-gray-600">
                            <li v-for="(person, index) in committeeMembers" :key="index">{{ person }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
