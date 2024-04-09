<template>
  <a href="/vueknowles/public/">
    <div class="h-45 w-45 cursor-pointer transform hover:-rotate-90 duration-300 linear ">
      <img :src="logoUrl" alt="Logo">
    </div>
  </a>
  </template>
  
  <script>
  import logoUrl from '../assets/images/logo.png';
  
  export default {
    data() {
      return {
        logoUrl
      };
    }
  }
  </script>