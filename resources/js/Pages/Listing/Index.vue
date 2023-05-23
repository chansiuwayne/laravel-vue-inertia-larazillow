<template>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- <Box v-for="listing in listings" :key="listing.id" class="box">
            <div>
                <Link :href="route('listing.show', { listing: listing.id })">
                <div>
                    <Price :price="listing.price" class="text-2xl font-blod" />
                </div>
                <ListingAddress :listing="listing" class="text-lg" />
                <ListingSpace :listing="listing" class="text-gary-500" />
                </Link>
            </div>
            <div>
                <Link :href="route('listing.edit', { listing: listing.id })">Edit</Link>
            </div>
            <div>
                <Link :href="route('listing.destroy', { listing: listing.id })" method="DELETE">Delete</Link>
            </div>
        </Box> -->
        <Listing v-for="listing in listings" :key="listing.id" :listing="listing" />
    </div>
</template>

<script setup>
import Listing from '@/Composables/Listing.vue';
defineProps({ listings: Array })
</script> 

<style></style>