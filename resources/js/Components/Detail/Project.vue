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
    itemCount: Number,
})
const typedText = ref('');
const projectName = ref(props.projectName);
const typingSpeed = 100; // milliseconds
var viewMode = ref(props.viewMode); 
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
});

function viewSwitch(){
    if(props.viewMode == 'web' && props.projectName != 'F-Service') {
        viewMode.value = viewMode.value === 'web' ? 'mobile' : 'web';
    }
}
</script>
<template>
    <div class="h-full w-full pb-20 bg-smoke block">
        <div class=" pt-24 pl-8 lg:pt-28 lg:pl-32 bg-smoke">
            <h1 class="type-wrap text-5xl text-night font-bebas tracking-wider ">
                <span>{{ typedText }}</span>
                <span class="cursor">|</span>
            </h1>
            <div class=" w-full lg:w-7/12 flex flex-row flex-wrap">
                <div v-for="tech in techs">
                    <TechBox :tech="tech"></TechBox>
                </div>
            </div>
            <div class="w-full flex flex-col lg:flex-row">
             
                <ProjectInfo class="mr-10" :desc="desc" :url="props.project.url"></ProjectInfo>

                <DesktopView v-if="viewMode == 'web'" :name="props.project.name" :itemCount="itemCount"></DesktopView>

                <MobileView v-if="viewMode == 'mobile'" :name="props.project.name" :itemCount="itemCount"></MobileView>
            </div>
            <button @click="viewSwitch()" class="size-16 absolute left-3/4 bottom-32 lg:left-2/4 lg:bottom-5">
                <svg class="hover:fill-ocean duration-150 ease-in-out" version="1.1" id="swap-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 94.35">
                <g><path class="st0" d="M90.37,26.48h25.48c1.94,0,3.71,0.79,4.97,2.06c1.28,1.28,2.06,3.04,2.06,4.97v53.82 c0,1.94-0.79,3.71-2.06,4.97c-1.28,1.28-3.04,2.06-4.97,2.06H90.37c-1.94,0-3.71-0.79-4.97-2.06c-1.28-1.28-2.06-3.04-2.06-4.97 V33.5c0-1.94,0.79-3.71,2.06-4.97C86.68,27.25,88.43,26.48,90.37,26.48L90.37,26.48z M3.05,0h106.12c1.68,0,3.05,1.37,3.05,3.05 v18.44h-6.48V8.44c0-1.48-1.21-2.7-2.7-2.7H9.17v0c-1.48,0-2.7,1.21-2.7,2.7v52.53c0,1.48,1.21,2.7,2.7,2.7H76.7V76.4H3.05 C1.37,76.4,0,75.03,0,73.35V3.05C0,1.37,1.37,0,3.05,0L3.05,0L3.05,0z M42.27,80.61h27.67c0.07,4.79,2.04,9.07,7.39,12.45H34.89 C39.16,89.96,42.29,86.19,42.27,80.61L42.27,80.61L42.27,80.61z M56.11,66.12c2.16,0,3.92,1.75,3.92,3.92 c0,2.16-1.76,3.92-3.92,3.92c-2.16,0-3.92-1.75-3.92-3.92C52.19,67.88,53.94,66.12,56.11,66.12L56.11,66.12z M103.1,85.72 c1.59,0,2.89,1.28,2.89,2.89c0,1.59-1.28,2.89-2.89,2.89c-1.59,0-2.89-1.28-2.89-2.89C100.21,87.02,101.49,85.72,103.1,85.72 L103.1,85.72z M86.3,83.52h33.61V37.37H86.3V83.52L86.3,83.52z"/></g>
                </svg>
            </button>
        </div>
        
    </div>
</template>
