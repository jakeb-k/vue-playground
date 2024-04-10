<template>
    <div class="h-3/5 " >
      <img :src="portraitUrl" alt="portrait" 
      class="mb-14 lg:mb-0 h-[340px] w-[340px] lg:h-[390px] lg:w-[390px] border-[2px] border-neon
      rounded-md object-cover">
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