<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Hogwarts from "@/Layouts/Hogwarts.vue";

defineProps({

});
</script>

<template>
    <Head title="Blog - "/>
    <Hogwarts>
        <template #title>
            This is for blog
        </template>
        <template #content>

        </template>
    </Hogwarts>
</template>

<style scoped>

</style>
