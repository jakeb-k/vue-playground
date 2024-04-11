<script setup>

import ProjectBox from './ProjectBox.vue';
const props = defineProps({
    webProjects: Array,
    mobileProjects: Array,
});
</script>
<template>
    <div id="projects" class="w-full px-10 lg:px-32 py-10 bg-night">
        <h1 class="text-neon font-bebas text-5xl tracking-wide mt-10">Websites</h1>
        <div class="flex flex-row h-[500px] overflow-x-scroll mb-12">
            <div v-for="project in webProjects">
                <ProjectBox :project="project"></ProjectBox>
            </div>
        </div>
        <h1 class="text-neon font-bebas text-5xl tracking-wide">Mobile Apps</h1>
        <div class="flex flex-row  h-[500px] overflow-x-scroll w-auto">
            <div v-for="project in mobileProjects">
                <ProjectBox :project="project"></ProjectBox>
            </div>
        </div>
        
        
    </div>
</template>