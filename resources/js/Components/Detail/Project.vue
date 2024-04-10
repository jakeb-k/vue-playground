<script setup>
import { ref, onMounted, defineProps } from 'vue'; 
import TechBox from '@/Components/Detail/TechBox.vue'; 
import ProjectInfo from '@/Components/Detail/ProjectInfo.vue'; 

const props = defineProps({
    project: Object,
    projectName: String,
    techs: {
        type: Array,
        default: () => ([]), // provide a default empty array
    },
    desc: Array
})
const typedText = ref('');
const projectName = ref(props.projectName);
const typingSpeed = 100; // milliseconds

function typeText() {
  let i = 0;
  const timer = setInterval(() => {
    if (i < projectName.value.length) {
      typedText.value += projectName.value.charAt(i);
      i++;
    } else {
      clearInterval(timer);
    }
  }, typingSpeed);
}

onMounted(() => {
  typeText();
  console.log(props); 
});
</script>
<template>
    <div class="h-dvh w-full bg-smoke">
        <div class="pt-28 ml-32">
            <h1 class="type-wrap text-5xl text-night font-bebas tracking-wider">
                <span>{{ typedText }}</span>
                <span class="cursor">|</span>
            </h1>
            <div class="w-7/12 flex flex-row justify-between">
                <div v-for="tech in techs">
                    <TechBox :tech="tech"></TechBox>
                </div>
            </div>
            <div class="flex flex-row">
                <ProjectInfo :desc="desc" :url="props.project.url"></ProjectInfo>
            </div>
            
        </div>
        
    </div>
</template>
