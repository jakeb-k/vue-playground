<script setup>

</script>
<template>
    
    
    <div class="w-11/12 lg:w-3/5 lg:ml-16 h-[390px] relative bg-night rounded-md text-[#2db2ff] px-5 py-2 
    shadow-about border-[2px] border-neon">
    <h1 class="absolute -top-7 lg:-top-12 text-2xl lg:text-4xl font-bebas tracking-wider">About: <span class="text-white"> Jakeb Knowles</span></h1>
   
    <h1 class="type-wrap text-xl lg:text-4xl font-bebas tracking-wider mb-4">
        <span>{{ typedText }}</span>
        <span class="cursor">|</span>
    </h1>
    <p class=" text-[12px] lg:text-lg font-mono mb-5">As a natural-born coder, my fascination with technology was ignited the moment I saw 
        'Hello World' echo in the terminal, setting me on an unyielding path in software development. 
        With a Bachelor of Information Technology from Griffith University and hands-on experience in 
        developing cutting-edge projects like Aussie PicklePro and Nomster, I've honed a diverse skill 
        set across full-stack development. My expertise spans from JavaScript, Angular, and React to 
        Laravel, Python, and various database technologies. Beyond technical prowess, my ability to 
        lead teams, adapt to new challenges, and drive innovation positions me as a dynamic force ready 
        to contribute to groundbreaking projects in the tech landscape.</p>
    </div>

  
</template>

<script>
export default {
  data() {
    return {
      typedText: '',
      fullText: 'Code · Create · Conquer',
      typingSpeed: 100, // milliseconds
    };
  },
  mounted() {
    this.createObserver(); 
  },
  methods: {
    createObserver() {
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.typeText();
          observer.unobserve(entry.target); // Stop observing once it's in view
        }
      });
    });

    observer.observe(this.$el);
    },
    typeText() {
      let i = 0;
      const timer = setInterval(() => {
        if (i < this.fullText.length) {
          this.typedText += this.fullText.charAt(i);
          i++;
        } else {
          clearInterval(timer);
        }
      }, this.typingSpeed);
    },
  },
};
</script>