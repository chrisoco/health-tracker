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
});

const classes = computed(() =>
    props.active
        ? 'hover:text-white text-white bg-purple-800 bg-opacity-25 py-3'
        : 'hover:text-white py-3'
);
</script>

<template>
    <li>
        <Link :href="href" :class="classes">
            <slot />
        </Link>
    </li>
</template>
