<script setup>
import Navwarts from "@/Components/Navwarts.vue";

</script>

<template>
    <!-- Navbar -->
    <Navwarts/>
    <!-- Content -->
    <div class="container mx-auto">
        <div class="mt-20 mx-16 text-4xl text-start font-extrabold">
            <slot name="title"/>
        </div>
        <div class="mt-10 mx-16 text-1xl text-gray-300 text-start">
            <slot name="content"/>
        </div>
    </div>
    <div class="firefly" v-for="i in 30" :key="i"></div>
</template>
