<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/listing">Show page</Link>&nbsp;
    <Link href="/listing/create">New Listing</Link>

    <header class="border-b border-gray-200 dark:broder-gray-700 bg-white dark:bg-gray-800 w-full">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg font-medium">
                    <Link :href="route('listing.index')">Listings</Link>
                </div>
                <div class="text-xl text-indigo-600 dark:text-indigo-300">
                    <Link :href="route('listing.index')">LaraZillow</Link>
                </div>
                <div>
                    <Link :href="route('listing.create')"
                        class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded p-2">+ New Listing</Link>
                </div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div v-if="message"
            class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
            <!-- flash Success -->
            {{ message }}
        </div>
        <slot>Default</slot>
    </main>
</template>


<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
const page = usePage()
const message = computed(() => page.props.flash.success)

</script>

<style>
.success {
    background-color: green;
    color: white;
}
</style>