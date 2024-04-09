<script setup>
import { defineProps } from 'vue'; 
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
});
</script>
<template>
    <Head :title="projectName" />
        <MasterLayout>
             <Project :project="project"></Project>
        </MasterLayout>

</template>