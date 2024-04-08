<script setup>

import { Link } from '@inertiajs/vue3'; 
import Logo from '@/Components/Logo.vue'; 


</script>
<template>
    <nav class="bg-white border-b border-black py-2 shadow-lg ">
        <!-- Primary Navigation Menu -->
    <div class="flex justify-center w-full">

    
        <div class="w-1/3 flex justify-around">
            <Link href="/#about"> About </Link>  
            <Link> Projects</Link> 
        </div>
        <div class="w-1/3 flex justify-around">
            <Logo></Logo>
        </div>
        <div class="w-1/3 flex justify-around">
            <Link> Contact </Link>    
            <Link> Repositories </Link>    
        </div>   
    </div>
    </nav>
    <!-- Page Content -->
    <main>
        <slot />
    </main>
</template>