<template>
    <div class="h-3/5" >
      <img src="../assets/images/profile.webp" alt="profile" 
      class="h-[320px] w-[320px] lg:h-[400px] lg:w-[400px] border-[3px] border-gray-800 rounded-full 
      object-cover lg:-mt-10">
    </div>
</template>
  
  <script>
  import profileUrl from '../assets/images/profile.webp';
  
  export default {
    data() {
      return {
        profileUrl
      };
    }
  }
  </script>