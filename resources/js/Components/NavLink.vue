<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
    scrolled: {
        type: Boolean
    }
});

const classes = computed(() =>
    props.active
        ? 'font-bebas text-xl lg:text-4xl text-neon underline tracking-wider shadow-pre-inset hover:shadow-post-inset hover:text-white hover:underline duration-300 ease-in-out'
        : 'font-bebas text-xl lg:text-4xl text-neon tracking-wider shadow-pre-inset hover:shadow-post-inset hover:text-white hover:underline duration-300 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
