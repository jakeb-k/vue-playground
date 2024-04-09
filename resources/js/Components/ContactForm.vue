<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3';

defineProps({ errors: Object })

const email = reactive({
  name: null,
  email: null,
  note: null,
})

function submit() {
  router.post('/vueknowles/public/contact', email)
  email.name = ""
  email.email = ""
  email.note = ""
}
</script>
<template>
    <div>
        <form @submit.prevent="submit" class="flex flex-col w-[500px] mt-20 mx-auto border-[3px] border-neon p-8
        bg-night rounded-lg shadow-contact">
       
            <h1 class="text-5xl text-center font-bebas text-neon tracking-wider">Get In Touch</h1>
            
            <label class="text-2xl text-neon font-mono mb-2" for="name">Name:</label>
            <input class="mb-8 focus:border-ocean" type="text" id="name" v-model="email.name" />
            <span class="text-red-600" v-if="$page.props.errors.name">{{ $page.props.errors.name }}</span>


            <label class="text-2xl text-neon font-mono mb-2" for="email">Email:</label>
            <input class="mb-8 focus:border-ocean" type="text" id="email" v-model="email.email" />
            <span class="text-red-600" v-if="$page.props.errors.email">{{ $page.props.errors.email }}</span>

            <label class="text-2xl text-neon font-mono mb-2" for="note">Message:</label>
            <textarea class="mb-8 focus:border-ocean h-40" id="note" v-model="email.note"></textarea>
            <span class="text-red-600" v-if="$page.props.errors.note">{{ $page.props.errors.note }}</span>
    
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