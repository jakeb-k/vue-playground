<script setup>


const props = defineProps({
    project: Object
})
</script>
<template>
    <div class="h-dvh bg-smoke flex justify-center items-center ">
        <h1>{{ props.project.name }}</h1>
    </div>
</template>