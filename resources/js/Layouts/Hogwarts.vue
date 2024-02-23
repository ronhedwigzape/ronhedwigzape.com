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
        <div class="mt-16 mx-10 sm:mx-20 md:mx-40 lg:mx-60 xl:mx-80 text-start">
            <h1 class="dark:text-gray-100 scroll-m-20 text-4xl font-extrabold tracking-tight">
                <slot name="title"/>
            </h1>
        </div>
        <div class="mt-10 mx-10 sm:mx-20 md:mx-40 lg:mx-60 xl:mx-80 text-1xl dark:text-gray-400 text-start">
            <slot name="content"/>
        </div>
    </div>
    <div class="firefly" v-for="i in 100" :key="i"></div>
</template>
