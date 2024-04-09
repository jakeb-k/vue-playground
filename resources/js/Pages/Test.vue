<script setup>

import { Link } from '@inertiajs/vue3'; 
import NavLink from '@/Components/NavLink.vue';
import Logo from '@/Components/Logo.vue'; 
import { ref, computed, onUnmounted, watchEffect } from 'vue';

const isScrolled = ref(false);

watchEffect(() => {
  const handleScroll = () => {
    isScrolled.value = window.scrollY >= 100;
  };

  window.addEventListener('scroll', handleScroll);
  onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
  });
});
const navClasses = computed(() =>
    isScrolled.value
        ? 'duration-1000 h-16 py-0 text-center bg-night shadow-nav w-full fixed z-20'
        : 'duration-1000 h-16 py-12 text-center shadow-nav w-full bg-white fixed z-20 '
);
</script>
<template>
    <div :class="navClasses">
    
        <h1>NAVBAR</h1>
    </div>

    <div class="h-dvh w-full bg-ocean"></div>
    <div class="h-dvh w-full bg-night"></div>
    
</template>