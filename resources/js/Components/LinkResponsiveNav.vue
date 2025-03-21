<script setup>
import {computed} from 'vue';
import {Link} from '@inertiajs/vue3';

const props = defineProps({
    active: Boolean,
    href: String,
    as: String,
});

const classes = computed(() => {
    return props.active
        ? 'block w-full ps-3 pe-4 py-2 text-start text-base font-medium text-accent focus:outline-hidden focus:text-accent transition duration-150 ease-in-out'
        : 'block w-full ps-3 pe-4 py-2 text-start text-base font-medium text-primary hover:text-accent focus:outline-hidden focus:text-accent transition duration-150 ease-in-out';
});
</script>

<template>
    <div>
        <button v-if="as == 'button'" :class="classes" class="w-full text-start">
            <slot/>
        </button>

        <a v-else-if="as == 'a'" :class="classes" :href="href" class="w-full text-start">
            <slot/>
        </a>

        <Link v-else :class="classes" :href="href" class="uppercase">
            <slot/>
        </Link>
    </div>
</template>
