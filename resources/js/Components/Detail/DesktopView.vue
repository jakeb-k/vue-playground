<script setup>

const props = defineProps({
    name: String,
})

</script>
<template>
    <div class="web-view">
        <img :src="'/vueknowles/resources/js/assets/images/'+name+'/web/0.webp'"
    </div>
</template>