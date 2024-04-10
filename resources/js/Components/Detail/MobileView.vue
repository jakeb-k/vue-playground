<script setup>

const props = defineProps({
    name: String,
})

</script>
<template>
   
    <img class="mx-56 border-[3px] border-night object-cover rounded-xl h-[450px] w-auto shadow-project-img" 
    :src="'/vueknowles/resources/js/assets/images/'+name+'/mobile/0.webp'" /> 
  
</template>