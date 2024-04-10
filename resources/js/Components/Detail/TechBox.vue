<script setup>
const props = defineProps({
    tech: String
})

</script>
<template>
    <div class="mr-5 relative text-center p-2 bg-[#003366] rounded-2xl mt-2 shadow-tech">
        <img class="size-9 invert" :src="'https://simpleicons.org/icons/'+props.tech+'.svg'">
    </div>
</template>