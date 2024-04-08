<script setup>
import { Head } from '@inertiajs/vue3';
import MasterLayout from '@/Layouts/MasterLayout.vue'; 

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
            <div>
                <h1>My Name is Jakeb and this is my Vue portfolio</h1>
            </div>
        </MasterLayout>
    
    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
    </footer>

</template>
