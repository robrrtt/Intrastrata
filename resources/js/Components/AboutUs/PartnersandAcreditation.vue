<script setup>
const partnerCategories = {
    "Private Clients": [
        "International Elevator and Equipment, Inc.",
        "D.M. Consunji Corporation",
        "Megawide Construction Corporation",
        "Alpha Land Baguio Mountain Log Homes, Inc.",
        "Southfood Groups, Inc.",
        "Starcross Construction, Inc.",
        "Triple One Management Development Corp.",
        "A.M Oreta & Co. Inc.",
        "Taisei Corporation",
        "AFDR Insurance Brokers Inc. (formerly Gotuaco Del Rosario Insurance Brokers)",
        "Smart Communications",
        "Maynilad Services",
        "Meralco",
        "PLDT",
        "Eastern Telecommunications Philippines, Inc",
        "Anchor Insurance Brokers, Inc.",
        "PhilPacific Insurance Brokers & Managers, Inc.",
        "AON Insurance & Reinsurance Brokers, Philippines, Inc.",
        "Lockton Philippines Insurance & Reinsurance Brokers, Inc."
    ],
    "Accredited Government Institutions": [
        "DPWH", "DOE", "PNOC", "HLURB", "NLRC", "LG/Municipal Government",
        "National Power Corporation", "GSIS", "DOLE", "DOTC", "BIR", "DepEd",
        "SBMA", "AFP", "City Government of Muntinlupa",
        "DBP Insurance Brokerage, Inc.", "LBP Insurance Brokerage, Inc."
    ],
    "Treaty Partners": [
        "National Reinsurance Corporation of the Philippines (NatRe) (Fire, Casualty and Bonds)",
        "Philippine Machinery Management Services Corporation (Engineering Lines)",
        "Manila Reinsurance Brokers Corporation (Fire, Casualty and Bonds)",
        "Cedar Rapids Reinsurance Brokers Corporation (Fire, Casualty and Bonds)"
    ]
};
</script>

<template>
    <div class="bg-slate-900 text-white text-center py-10">
        <h1 class="text-5xl font-bold">Our Partners</h1>
        <p class="mt-2 text-lg text-slate-300">Trusted by top private companies and government institutions.</p>
    </div>

    <div class="bg-gray-100 py-10">
        <div class="max-w-6xl mx-auto px-6">
            <div v-for="(items, category) in partnerCategories" :key="category" class="mt-10">
                <h2 class="text-3xl font-semibold text-gray-800 border-b-4 border-gray-900 pb-2">
                    {{ category }}
                </h2>
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    <div v-for="(partner, index) in items" :key="index"
                        class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-gray-800">
                        <p class="text-gray-700 font-medium">{{ partner }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
