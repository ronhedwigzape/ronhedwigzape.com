<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Hogwarts from "@/Layouts/Hogwarts.vue";

defineProps({

});
</script>

<template>
    <Hogwarts>
        <template #title>
            <div class="grid grid-cols-2">
                <div >
                    Ron Hedwig Zape
                </div>
                <div class="flex justify-center">
                    hi
                </div>
            </div>
        </template>
        <template #content>
            <p class="my-3">
                Hi, I am Ron Hedwig, aspiring software engineer.
            </p>
            <p class="my-3">

            </p>
        </template>
    </Hogwarts>
</template>
<style>

</style>
