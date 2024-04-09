<script setup>

import { Link } from '@inertiajs/vue3'; 
import NavLink from '@/Components/NavLink.vue';
import Logo from '@/Components/Logo.vue'; 
import { ref, computed, onUnmounted, watchEffect } from 'vue';

const isScrolled = ref(false);

watchEffect(() => {
  const handleScroll = () => {
    const viewportHeight = window.innerHeight;
    isScrolled.value = window.scrollY > viewportHeight-70;
  };

  window.addEventListener('scroll', handleScroll);
  onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
  });
});
const navClasses = computed(() =>
    isScrolled.value
        ? 'duration-500 h-14 shadow-nav w-full bg-night fixed z-20'
        : 'duration-500 h-20 shadow-nav w-full bg-night fixed z-20 '
);
</script>
<template>
    <div :class="navClasses">
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
    </div>
    <!-- Page Content -->
    <main>
        <slot />
    </main>
</template>