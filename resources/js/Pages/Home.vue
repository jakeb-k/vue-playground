<script setup>
import { Head } from '@inertiajs/vue3';
import MasterLayout from '@/Layouts/MasterLayout.vue'; 
import Splash from '@/Components/Splash.vue';

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
        </MasterLayout>
    
    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
    </footer>

</template>
