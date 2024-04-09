<script setup>

</script>
<template>
    <div>
        <form class="flex flex-col w-[500px] mt-20 mx-auto border-[3px] border-neon p-8
        bg-night rounded-lg shadow-contact" method="POST" action='{{url("/contact")}}' id="contact">
        
        <h1 class="text-5xl text-center font-bebas text-neon tracking-wider">Get In Touch</h1>
        
        <label class="text-2xl text-neon font-mono mb-2" for="name">Name:</label>
        <input class="mb-8 focus:border-ocean" type="text" name="name" id="name" />


        <label class="text-2xl text-neon font-mono mb-2" for="email">Email:</label>
        <input class="mb-8 focus:border-ocean" type="text" name="email" id="email" />

        <label class="text-2xl text-neon font-mono mb-2" for="note">Message:</label>
        <textarea class="mb-8 focus:border-ocean h-44" name="note" id="note"></textarea>
 
        <!-- <div class="captcha">
            {!! NoCaptcha::display() !!}
            @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                    <strong>The captcha field is required!</strong>
                </span>
            @endif
        </div>  -->

        <button class="border-4 border-neon shadow-about rounded-xl py-4 w-full text-neon text-4xl font-bebas
        tracking-wider duration-300 ease-in-out cursor-pointer hover:bg-neon hover:text-night" type="submit">Send Message!</button>
    </form>
    </div>
</template>