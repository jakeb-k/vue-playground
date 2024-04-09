<script setup>

import ProjectBox from './ProjectBox.vue';
const props = defineProps({
    webProjects: Array,
    mobileProjects: Array,
});
</script>
<template>
    <div class="w-full py-10 bg-night">
        <h1 class="text-neon font-bebas mx-32 text-5xl tracking-wide mt-10">Web Projects</h1>
        <div class="flex flex-row h-[500px] overflow-x-scroll mx-32 mb-12">
            <div v-for="project in webProjects">
                <ProjectBox :project="project"></ProjectBox>
            </div>
        </div>
        <h1 class="text-neon font-bebas mx-32 text-5xl tracking-wide">Mobile Projects</h1>
        <div class="flex flex-row  h-[500px] overflow-x-scroll mx-32 w-auto">
            <div v-for="project in mobileProjects">
                <ProjectBox :project="project"></ProjectBox>
            </div>
        </div>
        
        
    </div>
</template>