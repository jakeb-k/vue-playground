<script setup>
import { defineProps, onMounted, watch } from 'vue';
import { Head } from '@inertiajs/vue3';
import MasterLayout from '@/Layouts/MasterLayout.vue'; 

import Line from '@/Components/Line.vue'; 
import Splash from '@/Components/Splash.vue';
import About from '@/Components/About.vue'; 
import Projects from '@/Components/Projects.vue'; 
import Contact from '@/Components/Contact.vue'; 


defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    webProjects: {
        type: Array
    },
    mobileProjects: {
        type: Array
    },
});

</script>

<template>
    
    <Head title="Welcome" />
  
        <MasterLayout>
            <Splash></Splash>
            <About></About>
            <Line></Line>
            <Projects :webProjects="webProjects" :mobileProjects="mobileProjects"></Projects>
            <Line></Line>
            <Contact></Contact>
        </MasterLayout>
    

</template>
