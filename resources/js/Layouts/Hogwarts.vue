<script setup lang="ts">
import Navwarts from "@/Components/Navwarts.vue";
import {ref} from "vue";

const isDark = ref(true);

</script>

<template>
    <!-- Navbar -->
    <Navwarts :class="{ 'dark' : isDark }"/>
    <!-- Content -->
    <div :class="{ 'dark' : isDark }" class="container mx-auto">
        <div class="mt-20 mx-16 text-start">
            <h1 class="dark:text-gray-100 scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl">
                <slot name="title"/>
            </h1>
        </div>
        <div class="mt-10 mx-16 text-1xl dark:text-gray-300 text-start">
            <slot name="content"/>
        </div>
    </div>
    <div class="firefly" v-for="i in 30" :key="i"></div>
</template>
