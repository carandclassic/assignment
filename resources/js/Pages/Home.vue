<template>
    <header class="p-4 bg-[rgb(45,91,45)] text-white border-b-[6px] border-b-[rgb(255,209,3)]">
        <span class="text-2xl">Car & Classic</span>
    </header>

    <main class="mx-auto max-w-screen-xl p-2">
        <Sort class="mb-2"></Sort>
        <Cars></Cars>
    </main>
</template>

<script>
import {defineComponent} from "vue";

import Sort from '../Components/Sort.vue';
import Cars from '../Components/Cars.vue';

export default defineComponent({
    components: {
        Sort,
        Cars,
    },
});
</script>
