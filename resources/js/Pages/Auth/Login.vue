<template>
<form @submit.prevent="login">
    <div class="w-1/2 mx-auto">
        <div>
            <label class="label">E-mail</label>
            <input type="email" id="email" v-model="form.email" class="input">
            <div class="input-error" v-if="form.errors.email">
                {{ form.errors.email }}
            </div>
        </div>
        <div class="mt-4">
            <label for="password" class="label">Password</label>
            <input id="password" type="password" v-model="form.password" class="input">
            <div class="input-error" v-if="form.errors.password">
                {{ form.errors.password }}
            </div>
        </div>
        <div class="mt-4">
            <button class="button-primary w-full" type="submit">Login</button>
        </div>
    </div>
</form>
</template>

<script setup>
    import { useForm } from '@inertiajs/vue3'
    // form.error.email
    const form = useForm({
        email : null,
        password : null
    })
    const login = () => form.post(route('login.store'))

</script>