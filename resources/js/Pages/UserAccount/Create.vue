<template>
    <form @submit.prevent="register">
        <div class="w-1/2 mx-auto">
            <div>
                <label class="label">Your Name</label>
                <input type="text" id="text" v-model="form.name" class="input">
                <div class="input-error" v-if="form.errors.name">
                    {{ form.errors.name }}
                </div>
            </div>
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
                <label for="password_confirmation" class="label">Confirm Password</label>
                <input id="password_confirmation" type="password" v-model="form.password_confirmation" class="input">
                <div class="input-error" v-if="form.errors.password">
                    {{ form.errors.password_confirmation }}
                </div>
            </div>
            <div class="mt-4">
                <button class="button-primary w-full" type="submit">Create User account</button>
            </div>
        </div>
    </form>
</template>
    
<script setup>
import { useForm } from '@inertiajs/vue3'
// form.error.email
const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null
})
const register = () => form.post(route('user-account.store'))
</script>