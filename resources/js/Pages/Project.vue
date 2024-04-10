<script setup>
import MasterLayout from '@/Layouts/MasterLayout.vue';
import Splash from '@/Components/Splash.vue'; 
import Project from '@/Components/Detail/Project.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    project: {
        type: Object
    }, 
    projectName: {
        type: String
    },
    techs: {
        type: Array
    },
    desc: {
        type: Array
    },
    viewMode: {
        type: String, 
    }
});
</script>
<template>
    <Head :title="projectName" />
        <MasterLayout>
             <Project :projectName="projectName" :project="project" :techs="techs" :desc="desc" :viewMode="viewMode"></Project>
        </MasterLayout>

</template>