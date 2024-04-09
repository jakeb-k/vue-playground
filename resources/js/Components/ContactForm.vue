<script setup>

</script>
<template>
    <div>
        <form class="flex flex-col w-[500px] mt-20 mx-auto border-[3px] border-neon p-8
        bg-night rounded-lg" method="POST" action='{{url("/contact")}}' id="contact">
        
        <h1 class="text-4xl text-center font-bebas text-neon tracking-wider">Get In Touch</h1>
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />


        <label for="email">Email:</label>
        <input type="text" name="email" id="email" />

        <label for="note">Message:</label>
        <textarea name="note" id="note"></textarea>
 
        <!-- <div class="captcha">
            {!! NoCaptcha::display() !!}
            @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                    <strong>The captcha field is required!</strong>
                </span>
            @endif
        </div>  -->

        <button type="submit">Send Message!</button>
    </form>
    </div>
</template>