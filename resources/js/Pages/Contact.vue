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
            <div class="max-w-lg p-6 mx-auto bg-white rounded-lg shadow-lg">
                <h1 class="mb-4 text-3xl font-bold text-center text-gold">Contact Us</h1>
                <form @submit.prevent="submitForm">
                    <div class="mb-4">
                        <label for="name" class="block mb-2 font-semibold text-gray-700">Name:</label>
                        <input type="text" id="name" v-model="form.name" required
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gold"
                               :disabled="loading">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 font-semibold text-gray-700">Email:</label>
                        <input type="email" id="email" v-model="form.email" required
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gold"
                               :disabled="loading">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block mb-2 font-semibold text-gray-700">Message:</label>
                        <textarea id="message" v-model="form.message" required
                                  class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gold"
                                  :disabled="loading"></textarea>
                    </div>
                    <button type="submit" :disabled="loading"
                            class="w-full py-2 font-semibold text-white transition duration-200 rounded-lg bg-gold hover:bg-yellow-600">
                        {{ loading ? 'Sending...' : 'Send' }}
                    </button>
                    <div v-if="error" class="mt-4 text-red-500">{{ error }}</div>
                    <div v-if="success" class="mt-4 text-green-500">Message sent successfully!</div>
                </form>
            </div>
        </template>
    </Hogwarts>
</template>

<style scoped>
.text-gold {
    color: #FFD700; /* Gold color */
}
</style>
