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
        ? 'font-bebas text-3xl text-night underline tracking-wider shadow-pre-inset hover:shadow-footer-inset hover:text-neon hover:underline duration-300 ease-in-out'
        : 'font-bebas text-3xl text-night tracking-wider shadow-footer-post hover:shadow-footer-pre hover:text-neon hover:underline duration-300 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
