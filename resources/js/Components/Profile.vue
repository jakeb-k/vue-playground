<template>
    <div class="h-3/5 animate-fly-in-from-right" >
      <img src="../assets/images/profile.webp" alt="profile" class="h-[400px] w-[400px] border-[3px] border-gray-800 rounded-full object-cover">
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