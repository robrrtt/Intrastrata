<script setup>
const branches = [
    {
        city: "HEAD OFFICE",
        address: "8/F 88 Corporate Center, Sedeño cor. Valero Sts., Salcedo Village, Makati City",
        contacts: ["Tel Nos.: 8817-3031 to 34", "Fax No.: 8817-2193"]
    },
    {
        city: "CEBU BRANCH",
        address: "301 Colon Dev’t. Corp., Osmeña Blvd., Cebu City",
        contacts: ["Tel No.: (032) 255-8748", "(032) 255-8985", "Fax No.: (032) 412-1815"]
    },
    {
        city: "DUMAGUETE BRANCH",
        address: "89 Airport Road Piapi, Dumaguete City",
        contacts: ["Tel No.: (035) 522-4680"]
    },
    {
        city: "ILOILO",
        address: "13 A Tanza Timawa, Zone II, Iloilo City",
        contacts: ["Contact No.: 099-8551-9389"]
    },
    {
        city: "CAGAYAN DE ORO",
        address: "Blk. 18 Lot 6 Xavier Heights Subd., Upper Balulang, Cagayan de Oro City",
        contacts: ["Contact No.: 09352052120"]
    }
];
</script>

<template>
            <!-- Hero Section -->
            <div class="bg-slate-900 text-white text-center py-10">
            <h1 class="text-5xl font-bold">Branches</h1>
            <p class="mt-2 text-lg text-slate-300">Intrastata Assurance Corporation</p>
        </div>
    <div class="bg-gray-100 py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-5">
                <div v-for="(branch, index) in branches" :key="index"
                    class="bg-white p-6 rounded-2xl shadow-lg border-l-8 border-gray-900 transition-transform duration-300 hover:scale-105">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ branch.city }}</h2>
                    <p class="mt-2 text-gray-600">{{ branch.address }}</p>
                    <ul class="mt-3 text-gray-700">
                        <li v-for="(contact, idx) in branch.contacts" :key="idx">{{ contact }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
