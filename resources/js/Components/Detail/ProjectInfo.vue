<script setup>

import { onMounted } from 'vue';

const props = defineProps({
    desc: Array,
    url: String,
})

</script>
<template>
    <div class="mt-[350px] bg-night w-11/12 lg:w-5/12 h-[500px] lg:h-[450px] py-[10px] px-[14px] rounded-lg border-[2.5px] border-ocean ">
        <p class="font-mono text-smoke text-sm lg:text-md">{{ desc[0] }}</p>
        <ul class="list-disc">
            <li class="font-mono text-xs ml-4 lg:text-sm text-smoke my-4 lg:mx-12">{{ desc[1] }}</li>
            <li class="font-mono text-xs ml-4 lg:text-sm text-smoke my-4 lg:mx-12">{{ desc[2] }}</li>
            <li class="font-mono text-xs ml-4 lg:text-sm text-smoke mt-6 lg:mx-12">{{ desc[3] }}</li>
        </ul>
        <a :href="url">
            <button class="bg-smoke block my-4 mx-auto text-center w-8/12 lg:w-5/12 text-ocean font-bebas tracking-wider 
            text-lg lg:text-2xl py-5 rounded-xl shadow-cta-pre transform hover:translate-x-[12px] hover:translate-y-[12px] 
            hover:shadow-cta-post hover:text-white hover:bg-ocean hover:underline transition duration-200 linear">
            View Project!</button>
        </a>
    </div>
</template>