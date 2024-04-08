<script setup>

import { Link } from '@inertiajs/vue3'; 
import Logo from '@/Components/Logo.vue'; 


</script>
<template>
    <nav class="bg-night border-b border-black py-2 shadow-lg ">
        <!-- Primary Navigation Menu -->
    <div class="flex justify-center w-full">
        
        <div class="w-1/3 flex justify-around items-center">
            <Link class="font-bebas text-3xl text-neon tracking-widest shadow-pre-inset 
            hover:shadow-post-inset hover:text-white transition duration-300 ease-in-out" href="/#about"> About </Link>  

            <Link class="font-bebas text-3xl text-neon tracking-widest shadow-pre-inset
            hover:shadow-post-inset hover:text-white transition duration-300 ease-in-out" href="/#about">Projects </Link> 
        </div>

        <div class="w-1/3 flex justify-around">
            <Logo></Logo>
        </div>

        <div class="w-1/3 flex justify-around items-center">
            <Link class="font-bebas text-3xl text-neon tracking-widest shadow-pre-inset
            hover:shadow-post-inset hover:text-white transition duration-300 ease-in-out" href="/#about"> Contact </Link>    
            <Link class="font-bebas text-3xl text-neon tracking-widest shadow-pre-inset 
            hover:shadow-post-inset hover:text-white transition duration-300 ease-in-out" href="/#about"> Repositories </Link>    
        </div>   
    </div>
    </nav>
    <!-- Page Content -->
    <main>
        <slot />
    </main>
</template>