<template>
    <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <Box class="col-span-12 md:col-span-7 flex items-center w-full">
            <div class="w-full text-center font-medium text-gary-500">No Images</div>
        </Box>
        <div class="flex flex-col gap-4 md:col-span-5">
            <Box>
                <template #header>
                    Basic info
                </template>
                <Price :price="listing.price" class="text-2xl font-bold" />
                <ListingSpace :listing="listing" class="text-lg" />
                <ListingAddress :listing="listing" class="text-gary-500" />
            </Box>
            <Box>
                <template #header>
                    Monthly Payment
                </template>
                <div>
                    <label class="label">Interest rate (2.5%)</label>
                    <label class="label">{{ interestRate }} %</label>
                    <input type="range" min="0.1" max="30" step="0.1" class="w-full bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" v-model.number="interestRate">
                    <label class="label">Duration ({{ duration }} years)</label>
                    <input type="range" min="3" max="35" step="1" class="w-full bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" v-model.number="duration">
                </div>
                <div class="text-gray-600 dark:text-gray-300 mt-2">
                    <div class="text-gray-400">Your monthly payment</div>
                    <Price :price="monthlyPayment" class="text-3xl" />
                </div>
                <div class="mt-2 text-gray-500">
                    <div class="flex justify-between">
                        <div>total paid</div>
                        <div><Price :price="totalPaid" class="font-medium" /></div>
                    </div>
                </div>
                <div class="mt-2 text-gray-500">
                    <div class="flex justify-between">
                        <div>Interest paid</div>
                        <div><Price :price="totalInterest" class="font-medium" /></div>
                    </div>
                </div>
            </Box>
            <Box>
                <template #header>Offer</template>
                Make an offer
            </Box>
        </div>
    </div>
</template>
<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
import { useMonthlyPayment } from '@/Composables/MonthlyPayment';
import { ref } from 'vue'

const interestRate = ref(2.5)
const duration = ref(25)

const props = defineProps({
    listing: Object
})

const { monthlyPayment, totalInterest, totalPaid } = useMonthlyPayment(props.listing.price, interestRate, duration)

</script>  