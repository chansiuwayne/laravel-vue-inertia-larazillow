<template>
        <span>{{ formattedPrice }}</span>
</template>

<script setup>
import { computed } from 'vue'
const props = defineProps({
    price: [Number, String]
})

const formattedPrice = computed(() => Number(props.price).toLocaleString('hk-ZT', { style: 'currency', currency: "HKD", maximumFractionDigits: 2 }))
</script>