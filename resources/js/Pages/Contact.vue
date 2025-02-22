<script setup lang="ts">
import { ref, h } from 'vue';
import Hogwarts from "@/Layouts/Hogwarts.vue";
import { Head } from "@inertiajs/vue3";
import axios from 'axios';
import { Input } from '@/Components/ui/input';
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from '@/Components/ui/card';
import { Label } from '@/Components/ui/label';
import { Button } from '@/Components/ui/button';
import { Textarea } from '@/Components/ui/textarea';
import { useToast } from '@/Components/ui/toast/use-toast';
import Toaster from '@/Components/ui/toast/Toaster.vue';
import { ToastAction } from "@/Components/ui/toast";

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
            description: 'Your owl has been dispatched successfully!',
            variant: 'default'
        });
    } catch (err: any) {
        error.value = err.response?.data?.message || 'Failed to send your message. Please try again.';
        toast({
            title: 'Oh no! The owl seems lost.',
            description: 'There was a problem sending your message. Please try again.',
            variant: 'destructive',
            action: h(ToastAction, {
                altText: 'Try again',
                onClick: () => {
                    submitForm();
                }
            }, {
                default: () => 'Try again'
            }),
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
            <Card class="w-full mx-auto">
                <CardHeader>
                    <CardTitle>Headmaster's Owl Post</CardTitle>
                    <CardDescription>
                        Send your message to the headmaster’s office—where wisdom, reminiscent of Dumbledore’s guidance, awaits your enchanted correspondence.
                    </CardDescription>
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
                        <div class="mb-7">
                            <Label for="message">Message:</Label>
                            <Textarea placeholder="Type your enchanted message here." v-model="form.message" required :disabled="loading" />
                        </div>
                        <Button type="submit" :disabled="loading" class="w-full">
                            {{ loading ? 'Sending your owl...' : 'Send' }}
                        </Button>
                    </form>
                </CardContent>
            </Card>
        </template>
    </Hogwarts>
</template>
