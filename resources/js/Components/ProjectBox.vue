<script setup>
import { ref, onMounted, computed } from 'vue';
import { defineProps } from 'vue';

const props = defineProps({
    project: Object
})
const imageSrc = ref('');

onMounted(async () => {
  if (props.project.logo) {
    const imagePath = `../assets/images/logos/${props.project.logo}`;
    imageSrc.value = new URL(imagePath, import.meta.url).href;
  }
});
const displayName = computed(() => {
  return props.project.name.replace(/_/g, ' ');
});
</script>
<template>
    <a :href="'public/projects/'+props.project.name">
    <div class="mr-14 lg:mr-20 flex flex-col justify-between bg-smoke block mt-12 mx-auto text-center 
    w-[250px] h-[325px] lg:w-[335px] lg:h-[350px] lg:w-[335px] lg:h-[350px] px-4 text-[#007bff] font-bebas tracking-wider 
        text-4xl py-6 rounded-md shadow-pb-pre transform hover:translate-x-[18px] hover:translate-y-[18px] 
        hover:shadow-pb-post hover:text-white hover:bg-ocean hover:underline transition duration-200 linear
        cursor-pointer">
        <img class="w-[270px] max-h-64 rounded-3xl m-auto object-contain" :src="imageSrc">
        <h1>{{ displayName ?? "" }}</h1>
    </div>
  </a>
</template>
