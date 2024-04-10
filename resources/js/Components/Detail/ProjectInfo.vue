<script setup>

import { onMounted } from 'vue';

const props = defineProps({
    desc: Array,
    url: String,
})

</script>
<template>
    <div class="mt-12 bg-night w-5/12 h-[450px] py-[10px] px-[14px] rounded-lg border-[2.5px] border-ocean ">
        <p class="font-mono text-smoke">{{ desc[0] }}</p>
        <ul class="list-disc">
            <li class="font-mono text-sm text-smoke my-4 mx-12">{{ desc[1] }}</li>
            <li class="font-mono text-sm text-smoke my-4 mx-12">{{ desc[2] }}</li>
            <li class="font-mono text-sm text-smoke mt-6 mx-12">{{ desc[3] }}</li>
        </ul>
        <a :href="url">
            <button class="bg-smoke block my-4 mx-auto text-center w-5/12 text-ocean font-bebas tracking-wider 
            text-2xl py-5 rounded-xl shadow-cta-pre transform hover:translate-x-[12px] hover:translate-y-[12px] 
            hover:shadow-cta-post hover:text-white hover:bg-ocean hover:underline transition duration-200 linear">
            View Project!</button>
        </a>
    </div>
</template>