<script setup lang="ts">
import { ref, onMounted, onUnmounted, reactive } from 'vue';
import { Icon } from '@iconify/vue';
import { Link } from '@inertiajs/vue3';
import NavLink from './NavLink.vue';
import {SocialLink} from "@/types/social-link";

const isDropdownOpen = ref<boolean>(false);
const windowWidth = ref<number>(window.innerWidth);

const updateWidth = (): void => {
    windowWidth.value = window.innerWidth;
};

onMounted((): void => {
    window.addEventListener('resize', updateWidth);
});

onUnmounted((): void => {
    window.removeEventListener('resize', updateWidth);
});

const socialLinks = reactive<SocialLink[]>([
    {
        name: 'github',
        desc: 'Github',
        link: 'https://www.github.com/ronhedwigzape/ronhedwigzape.com'
    },
]);

</script>

<template>
    <nav class="container mx-auto my-8 text-gray-400">
        <div v-if="windowWidth > 768" class="lg:container mx-auto flex justify-between">
            <!-- Display text links for large screens -->
            <div>
                <Link :href="route('home')" class="fixed"><Icon height="25" icon="file-icons:owl"/></Link>
            </div>
            <div class="flex gap-x-4">
                <NavLink :href="route('blog')">Blog</NavLink>
                <NavLink :href="route('projects')">Projects</NavLink>
                <NavLink :href="route('contact')">Contact</NavLink>
                <a :href="social.link" v-for="social in socialLinks">
                    <Icon class="transition hover:text-gray-50 delay-100 mx-1" height="22" :icon="`line-md:${social.name}`"/>
                </a>
            </div>
        </div>
        <div v-else class="container mx-auto flex justify-between" align="center">
            <!-- Display icons for medium and small screens -->
            <div class="flex">
                <Link :href="route('home')" ><Icon height="25" icon="file-icons:owl"/></Link>
            </div>
            <div class="flex gap-x-4">
                <Link :href="route('blog')"><Icon height="25" icon="carbon:blog"/></Link>
                <Link :href="route('projects')"><Icon height="25" icon="carbon:idea"/></Link>
                <Link :href="route('contact')"><Icon height="25" icon="carbon:user"/></Link>
            </div>
        </div>
    </nav>
</template>

<style scoped>

</style>
