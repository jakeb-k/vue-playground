<script setup>
const props = defineProps({
    tech: String
})

</script>
<template>
    <div class="mr-5 group relative text-center p-2 bg-[#003366] rounded-2xl mt-2 shadow-tech " :alt="props.tech">
        <img class="size-8 lg:size-9 invert" :src="'https://simpleicons.org/icons/'+props.tech+'.svg'">
        <span class="tooltip-text absolute invisible group-hover:visible w-[120px] bg-black text-white text-center rounded-md py-[5px] z-10 bottom-full left-1/2 transform-gpu translate-x-[-50%] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        {{ props.tech }}
        </span>
    </div>
</template>