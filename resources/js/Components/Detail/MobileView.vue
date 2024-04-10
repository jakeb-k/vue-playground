<script setup>
import {ref} from 'vue'; 

const props = defineProps({
    name: String,
    itemCount: Number,
})
const index = ref(0);
let slideshowInterval = null;

function startSlideshow() {
    slideshowInterval = setInterval(() => {
        if (index.value < props.itemCount - 1) {
            index.value++;
        } else {
            index.value = 0;
        }
    }, 3000);
}

function setIndex(n) {
    index.value = n;
    clearInterval(slideshowInterval);
    startSlideshow();  // Restart the slideshow after setting the index
}

startSlideshow();
</script>
<template>
   <div class="flex flex-col">
        <img class="mx-56 border-[3px] border-night object-cover rounded-xl h-[450px] w-auto shadow-project-img" 
        :src="'/vueknowles/resources/js/assets/images/'+name+'/mobile/'+index+'.webp'"/> 
        <div class="mx-auto mt-5 flex flex-row">
            <button 
                class="p-2 rounded-full mr-2" 
                v-for="n in props.itemCount" 
                :key="n"
                :class="{ 'bg-blue-500': index === n - 1, 'bg-gray-500': index !== n - 1 }"
                @click="setIndex(n - 1)">
            </button>
        </div>
   </div>
    
</template>