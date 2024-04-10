<script setup>
import { ref, onMounted, defineProps } from 'vue'; 
import TechBox from '@/Components/Detail/TechBox.vue'; 
import ProjectInfo from '@/Components/Detail/ProjectInfo.vue'; 
import MobileView from '@/Components/Detail/MobileView.vue'; 
import DesktopView from '@/Components/Detail/DesktopView.vue'; 

const props = defineProps({
    project: Object,
    projectName: String,
    techs: {
        type: Array,
        default: () => ([]), // provide a default empty array
    },
    desc: Array,
    viewMode: String, 
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
    <div class="h-full w-full pb-20 bg-smoke block">
        <div class="pt-28 pl-32 bg-smoke">
            <h1 class="type-wrap text-5xl text-night font-bebas tracking-wider ">
                <span>{{ typedText }}</span>
                <span class="cursor">|</span>
            </h1>
            <div class="w-7/12 flex flex-row justify-between">
                <div v-for="tech in techs">
                    <TechBox :tech="tech"></TechBox>
                </div>
            </div>
            <div class="w-full flex flex-row">
             
                <ProjectInfo class="mr-10" :desc="desc" :url="props.project.url"></ProjectInfo>

                <DesktopView :name="props.project.name"></DesktopView>
            </div>
            
        </div>
        
    </div>
</template>
