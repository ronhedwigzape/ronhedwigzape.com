<script setup lang="ts">

import {Icon} from "@iconify/vue";

defineProps({
    logo: {
        type: String
    },
    icon: {
        type: String
    },
    logoSize: {
        type: Number,
        default: 10
    },
    iconSize: {
        type: Number,
        default: 23
    },
    alt: {
        type: String
    },
    src: {
        type: String
    },
    content: {
        type: String
    }
})
</script>

<template>
    <div>
        <div class="flex items-center custom-underline hover:text-white transition duration-200 ease-in-out">
            <img v-if="logo" :src="logo" :alt="alt" :style="`height: ${logoSize}px`">
            <Icon v-if="icon" :height="iconSize" :icon="`bi:${icon}`"/>
            <a
                :href="src"
                class=" text-gray-300"
                :class="{
                    'ml-1.5': logo,
                    'ml-1': icon
                }"
                target="_blank"
            >
                {{ content }}
            </a>
        </div>
    </div>
</template>

<style scoped>
.custom-underline {
    position: relative;
    text-decoration: none;
}

.custom-underline::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 0.5px;
    bottom: 0.5px;
    left: 0;
    background-color: #4f4f4f;
    transition: background-color .2s ease-in-out;
}

.custom-underline:hover::after {
    background-color: white;
}

a, img, Icon {
    cursor: pointer;
}

</style>

