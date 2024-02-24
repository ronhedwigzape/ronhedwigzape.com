<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Hogwarts from "@/Layouts/Hogwarts.vue";
import HedwigLink from "@/Components/HedwigLink.vue";
import {reactive, ref} from "vue";
import {SocialLink} from "@/types/social-link.js";

const facebook = ref('https://facebook.com/ACLCCollegeIRIGA')
const school = ref('ACLC College of Iriga')
const sportsfestLitmusda = ref('https://github.com/ronhedwigzape/sportsfest-litmusda')
const schoolLogo = ref('/aclc-white.png')


const socialLinks = reactive<SocialLink[]>([
    {
        name: 'facebook',
        desc: 'Facebook',
        link: 'https://www.facebook.com/ronhedwigzape'
    },
    {
        name: 'github',
        desc: 'GitHub',
        link: 'https://www.github.com/ronhedwigzape'
    },
    {
        name: 'linkedin',
        desc: 'LinkedIn',
        link: 'https://www.linkedin.com/in/ronhedwigzape'
    },
    {
        name: 'twitter-x',
        desc: 'Twitter',
        link: 'https://www.twitter.com/ronhedwigzape'
    },
    {
        name: 'tiktok',
        desc: 'Tiktok',
        link: 'https://www.tiktok.com/@ronhedwigzape'
    },
    {
        name: 'instagram',
        desc: 'Instagram',
        link: 'https://www.instagram.com/ronhedwigzape'
    },
    {
        name: 'threads',
        desc: 'Threads',
        link: 'https://www.threads.net/@ronhedwigzape'
    },
    {
        name: 'mastodon',
        desc: 'Mastodon',
        link: 'https://mastodon.social/@ronhedwigzape'
    },
    {
        name: 'discord',
        desc: 'Discord',
        link: 'https://discordapp.com/users/745947057449074708'
    }
]);

defineProps({

});
</script>

<template>
    <Hogwarts>
        <template #title>
            Ron Hedwig Zape
        </template>
        <template #content>
            <p class="mb-5 leading-relaxed">
                Hi, I'm Ron Hedwig, a open-source developer and an aspiring software engineer.
            </p>
            <p class="leading-relaxed">
                Senior Computer Science student at <HedwigLink class="font-bold inline-block" :logo="schoolLogo" :logo-size="11" :src="facebook" :content="school"/>.
            </p>
            <p class="leading-relaxed">
                Design is greatly inspired from <HedwigLink class="font-bold inline-block" src="https://antfu.me" content="Anthony Fu's"/> website.
            </p>
            <p class="mb-5 leading-relaxed">
                Developer and Contributor to a <HedwigLink class="font-bold inline-block" :src="sportsfestLitmusda" content="real-time tabulation software"/> for my college, which enhances efficiency and accuracy in scoring and managing results for external events such as pageants and competitions.
            </p>

            <p class="mb-5 leading-relaxed">
                My passion is rooted in creating useful tools and enhancing the user experience of a software for the community. As a developer, I find great fulfillment in contributing to the community through my work.
            </p>

            <p class="leading-relaxed">
                Outside of programming, my other top hobbies include riding fixed-gear bicycles 🚲 and editing videos 🎥.
            </p>

            <div align="center">
                <div class="border-b my-10 border-gray-700" style="border-color: #4f4f4f; width: 3em;"></div>
            </div>

            <p class="leading-relaxed mb-5 font-bold">
                Find me on
            </p>

            <HedwigLink
                class="mr-3 inline-flex"
                v-for="socialLink in socialLinks"
                :src="socialLink.link"
                :icon="socialLink.name"
                :icon-size="16"
                :content="socialLink.desc"
            />

            <div align="center">
                <div class="border-b my-10 border-gray-700" style="border-color: #4f4f4f; width: 3em;"></div>
            </div>

            <div class="mb-52 text-gray-600">
                MIT 2022-{{ new Date().getFullYear() }} &copy; <strong>ronhedwigzape</strong>
            </div>
        </template>
    </Hogwarts>
</template>
<style>

</style>
