<script setup>

import { Link } from '@inertiajs/vue3'; 
import NavLink from '@/Components/NavLink.vue';
import Logo from '@/Components/Logo.vue'; 
import { ref, onMounted, onUnmounted, watchEffect } from 'vue';

const isScrolled = ref(false);

watchEffect(() => {
  const handleScroll = () => {
    isScrolled.value = window.scrollY > 10;
  };

  window.addEventListener('scroll', handleScroll);
  onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
  });
});
</script>
<template>
    <nav :class="{
    'h-14': isScrolled,
    'h-20': !isScrolled,
    'shadow-nav': isScrolled,
    'bg-night': true,
    'border-b': true,
    'border-black': true,
    'shadow-lg': true,
    'fixed':true,
    'z-20':true,
    'w-full':true,
    'transition': true,
    'duration-500': true,
    'ease-in-out': true
    }" >
        <!-- Primary Navigation Menu -->
    <div class="flex justify-center w-full">
        
        <div class="w-1/3 flex justify-evenly items-center">
            <NavLink :class="{'text-[32px]': isScrolled}" href="/about"> About </NavLink>  
            <NavLink :class="{'text-[32px]': isScrolled}" href="/#about">Projects </NavLink> 
        </div>

        <div class="w-1/3 flex justify-around">
            <Logo :class="{'size-14': isScrolled}"></Logo>
        </div>

        <div class="w-1/3 flex justify-evenly items-center">
            <NavLink :class="{'text-[32px]': isScrolled}" href="/#about"> Contact </NavLink>    
            <NavLink :class="{'text-[32px]': isScrolled}" href="/#about"> Repositories </NavLink>    
        </div>   
    </div>
    </nav>
    <!-- Page Content -->
    <main>
        <slot />
    </main>
</template>