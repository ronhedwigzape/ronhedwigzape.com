<script setup lang="ts">

import Hogwarts from "@/Layouts/Hogwarts.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from 'vue';
import { Input } from '@/Components/ui/input'
import axios from 'axios';
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from '@/Components/ui/card';
import { Label } from '@/Components/ui/label';
import { Button } from '@/Components/ui/button';
import { Textarea } from '@/Components/ui/textarea';
import { useToast } from '@/Components/ui/toast/use-toast';
import Toaster from '@/Components/ui/toast/Toaster.vue'

const { toast } = useToast();

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
        toast({
            title: 'Success',
            description: 'Email sent successfully!',
            variant: 'default'
        });
    } catch (err: any) {
        error.value = err.response?.data?.message || 'Failed to send email. Please try again.';
        toast({
            title: 'Error',
            description: error.value || 'An error occurred.',
            variant: 'destructive'
        });
    } finally {
        loading.value = false;
    }
};

</script>

<template>
    <Toaster />
    <Head title="Contact - "/>
    <Hogwarts>
        <template #title>
            Let us connect!
        </template>
        <template #content>
            <Card class="max-w-lg mx-auto">
                <CardHeader>
                    <CardTitle>Contact Us</CardTitle>
                    <CardDescription>We'd love to hear from you!</CardDescription>
                </CardHeader>
                <CardContent>
                    <form @submit.prevent="submitForm">
                        <div class="mb-4">
                            <Label for="name">Name:</Label>
                            <Input type="text" id="name" v-model="form.name" required :disabled="loading" />
                        </div>
                        <div class="mb-4">
                            <Label for="email">Email:</Label>
                            <Input type="email" id="email" v-model="form.email" required :disabled="loading" />
                        </div>
                        <div class="mb-4">
                            <Label for="message">Message:</Label>
                            <Textarea placeholder="Type your message here." v-model="form.message" required :disabled="loading" />
                        </div>
                        <Button type="submit" :disabled="loading" class="w-full py-2 font-semibold text-white transition duration-200 rounded-lg bg-gold hover:bg-yellow-600">
                            {{ loading ? 'Sending...' : 'Send' }}
                        </Button>
                    </form>
                </CardContent>
            </Card>
        </template>
    </Hogwarts>
</template>

<style scoped>
.text-gold {
    color: #FFD700; /* Gold color */
}
</style>
