<script setup lang="ts">

import Hogwarts from "@/Layouts/Hogwarts.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from 'vue';
import axios from 'axios';

const form = ref({
    name: '',
    email: '',
    message: ''
});

const loading = ref(false);
const error = ref<string | null>(null);
const success = ref(false);

const submitForm = async () => {
    loading.value = true;
    error.value = null;
    success.value = false;

    try {
        await axios.post('/contact', form.value);
        success.value = true;
        form.value = {
            name: '',
            email: '',
            message: ''
        };
        alert('Email sent successfully!');
    } catch (err: any) {
        error.value = err.response?.data?.message || 'Failed to send email. Please try again.';
        alert(error.value);
    } finally {
        loading.value = false;
    }
};

</script>

<template>
    <Head title="Contact - "/>
    <Hogwarts>
        <template #title>
            Let us connect!
        </template>
        <template #content>
            <form @submit.prevent="submitForm">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" v-model="form.name" required
                           :disabled="loading">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" v-model="form.email" required
                           :disabled="loading">
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" v-model="form.message" required
                            :disabled="loading"></textarea>
                </div>
                <button type="submit" :disabled="loading">
                    {{ loading ? 'Sending...' : 'Send' }}
                </button>
                <div v-if="error" class="error">{{ error }}</div>
                <div v-if="success" class="success">Message sent successfully!</div>
            </form>
        </template>
    </Hogwarts>
</template>

<style scoped>
.error {
    color: red;
}
.success {
    color: green;
}
</style>
