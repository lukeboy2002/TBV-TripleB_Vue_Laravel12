<script setup>
import {computed} from 'vue';
import {Link} from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-1 pt-1 text-md font-medium leading-5 text-accent focus:outline-hidden transition duration-150 ease-in-out uppercase'
        : 'inline-flex items-center px-1 pt-1 text-md font-medium leading-5 text-primary hover:text-accent focus:outline-hidden focus:text-accent transition duration-150 ease-in-out uppercase';
});
</script>

<template>
    <Link :class="classes" :href="href">
        <slot/>
    </Link>
</template>
