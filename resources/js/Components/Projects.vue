<script setup>

import ProjectBox from './ProjectBox.vue';
const props = defineProps({
    webProjects: Array,
    mobileProjects: Array,
});
</script>
<template>
    <div class="w-full h-dvh bg-night absolute">
       <div class="w-full h-fit" v-for="project in webProjects">
        <ProjectBox :project="project"></ProjectBox>
       </div>
        
        
    </div>
</template>