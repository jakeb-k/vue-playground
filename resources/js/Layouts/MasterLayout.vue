<script setup>

import { Link } from '@inertiajs/vue3'; 
import NavLink from '@/Components/NavLink.vue';
import Logo from '@/Components/Logo.vue'; 

</script>
<template>
    <nav class="bg-night border-b border-black py-2 shadow-lg ">
        <!-- Primary Navigation Menu -->
    <div class="flex justify-center w-full">
        
        <div class="w-1/3 flex justify-around items-center">
            <NavLink href="/about"> About </NavLink>  
            <NavLink href="/#about">Projects </NavLink> 
        </div>

        <div class="w-1/3 flex justify-around">
            <Logo></Logo>
        </div>

        <div class="w-1/3 flex justify-around items-center">
            <NavLink href="/#about"> Contact </NavLink>    
            <NavLink href="/#about"> Repositories </NavLink>    
        </div>   
    </div>
    </nav>
    <!-- Page Content -->
    <main>
        <slot />
    </main>
</template>