<script setup>

import { Link } from '@inertiajs/vue3'; 
import Logo from '@/Components/Logo.vue'; 


</script>
<template>
    <nav class="bg-white border-b border-gray-100 py-2 shadow-lg">
                <!-- Primary Navigation Menu -->
        <Link href="/#about"> About </Link>  
        <Link> Projects</Link>    
        <Logo></Logo>
        <Link> Contact </Link>    
        <Link> Repositories </Link>    

    </nav>
    <!-- Page Content -->
    <main>
        <slot />
    </main>
</template>