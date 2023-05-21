<template>
    <div>
        <span class="font-bold"> {{ listing.beds }} bds <span class="text-gray-400">|</span> {{ listing.baths }} ba </span> <span class="text-gray-400">|</span>
        <span class="font-bold">{{ listing.area }}</span> m²
    </div>
</template>
<script setup>
defineProps({
    listing: Object
})
</script>