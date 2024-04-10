<script setup>
</script>
<template>
    <div class="bg-night rounded-md p-2 w-9/12 h-3/5 lg:w-2/5 mt-4/5 px-10 shadow">
        <p class="text-xl lg:text-2xl text-neon mb-5 font-mono">How's it Going?</p>
        <h1 class="text-5xl text-neon font-bebas tracking-wider text-center">I'm Jakeb</h1>
        <button v-scroll-to="{ el: '#contact', duration: 1400 }" class="bg-smoke block my-4 mx-auto text-center
        w-4/5 lg:w-3/5 text-ocean font-bebas tracking-wider 
        text-2xl lg:text-3xl py-6 rounded-xl shadow-cta-pre transform hover:translate-x-[12px] hover:translate-y-[12px] 
        hover:shadow-cta-post hover:text-white hover:bg-ocean hover:underline transition duration-200 linear">
        Contact Now!</button>
        <p class="text-xl lg:text-2xl mt-8 text-neon font-mono">Lets make something great!</p>
    </div>
</template>