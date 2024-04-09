<script setup>

import { Head } from '@inertiajs/vue3';
import MasterLayout from '@/Layouts/MasterLayout.vue'; 

import Line from '@/Components/Line.vue'; 
import Splash from '@/Components/Splash.vue';
import About from '@/Components/About.vue'; 
import Projects from '@/Components/Projects.vue'; 


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
});

</script>

<template>
    <Head title="Welcome" />
  
        <MasterLayout>
           <Splash></Splash>
            <About></About>
            <Line></Line>
            <Projects></Projects>
        </MasterLayout>
    
    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
    </footer>

</template>
