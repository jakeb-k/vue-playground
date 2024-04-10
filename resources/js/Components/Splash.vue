<script setup>

import CTA from './CTA.vue';
import Profile from './Profile.vue'; 
</script>
<template>
    <div class="h-dvh bg-custom-gradient flex justify-center items-center flex-col lg:flex-row">
        <CTA class="animate-fly-in-from-left"></CTA>
        <Profile class="animate-fly-in-from-right"></Profile>
    </div>
</template>