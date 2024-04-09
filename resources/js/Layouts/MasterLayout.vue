<script setup>

import { Link } from '@inertiajs/vue3'; 
import NavLink from '@/Components/NavLink.vue';
import FooterLink from '@/Components/FooterLink.vue';
import Logo from '@/Components/Logo.vue'; 
import { ref, computed, onUnmounted, watchEffect } from 'vue';

const isScrolled = ref(false);

watchEffect(() => {
  const handleScroll = () => {
    const viewportHeight = window.innerHeight-120;
    isScrolled.value = window.scrollY > viewportHeight;
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
                <NavLink :class="{'text-[32px]': isScrolled}" href="#about" v-scroll-to="{ el: '#about', duration: 1000 }"> About </NavLink>  
                <NavLink :class="{'text-[32px]': isScrolled}" href="#projects" v-scroll-to="{ el: '#projects', duration: 1000 }">Projects </NavLink> 
            </div>

            <div class="w-1/3 flex justify-around">
                <Logo :class="{'size-14': isScrolled}"></Logo>
            </div>

            <div class="w-1/3 flex justify-evenly items-center">
                <NavLink :class="{'text-[32px]': isScrolled}" href="#contact" v-scroll-to="{ el: '#contact', duration: 1400 }"> Contact </NavLink>    
                <NavLink :class="{'text-[32px]': isScrolled}" href="https://github.com/jakeb-k"> Repositories </NavLink>    
            </div>   
        </div>
    </div>
    <!-- Page Content -->
    <main class="overflow-x-hidden">
        <slot />
    </main>
    <div class="h-14 w-full bg-[#018cbe] flex items-center"> 
        <div class="flex justify-center items-center w-full">
            
            <div class="w-1/3 flex justify-evenly items-center">
                <FooterLink href="#about" v-scroll-to="{ el: '#about', duration: 1000 }"> About </FooterLink>  
                <FooterLink href="#projects" v-scroll-to="{ el: '#projects', duration: 1000 }">Projects </FooterLink> 
            </div>

            <div class="w-1/3 flex justify-around text-night text-xl tracking-wide font-bebas">
                © 2023 Jakeb Knowles
            </div>

            <div class="w-1/3 flex justify-evenly items-center">
                <FooterLink href="#contact" v-scroll-to="{ el: '#contact', duration: 1000 }"> Contact </FooterLink>    
                <FooterLink href="https://github.com/jakeb-k"> Repositories </FooterLink>    
            </div>   
        </div>
    </div>
</template>