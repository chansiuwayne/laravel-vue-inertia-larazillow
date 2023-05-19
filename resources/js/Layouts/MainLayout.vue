<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show page</Link>
    <slot>Default</slot>
</template>


<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
const page = usePage()

console.log(page.props.flash.success)
</script>

<style>
.success {
    background-color: green;
    color : white; 
}
</style>