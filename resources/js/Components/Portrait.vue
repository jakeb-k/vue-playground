<template>
    <div class="h-3/5 " >
      <img :src="portraitUrl" alt="portrait" 
      class="h-[390px] w-[390px] border-[2px] border-neon rounded-md object-cover">
    </div>
</template>
  
  <script>
  import portraitUrl from '../assets/images/jakey.webp';
  
  export default {
    data() {
      return {
        portraitUrl
      };
    }
  }
  </script>