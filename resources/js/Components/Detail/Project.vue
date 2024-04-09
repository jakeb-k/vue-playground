<script setup>
import { ref, onMounted } from 'vue'; 
import TechBox from '@/Components/Detail/TechBox.vue'; 

const props = defineProps({
    project: Object,
    projectName: String,
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
});
</script>
<template>
    <div class="h-dvh w-full bg-smoke absolute">
        <div class="mt-32 ml-32">
            <h1 class="type-wrap text-5xl text-night font-bebas tracking-wider">
                <span>{{ typedText }}</span>
                <span class="cursor">|</span>
            </h1>
            <div class="w-full flex flex-row justify-between">
                <TechBox></TechBox>
            </div>
            
        </div>
        
    </div>
</template>
