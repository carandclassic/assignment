<script setup lang="ts">
import Cars from '@/components/Cars.vue';
import Sort from '@/components/Sort.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Home" />

    <header
        class="bg-[rgb(45,91,45)] text-white border-b-[6px] border-b-[rgb(87,124,87)]"
    >
        <div class="p-4 max-w-screen-xl mx-auto">
            <span class="text-2xl">Car & Classic</span>
        </div>
    </header>

    <main class="mx-auto max-w-screen-xl p-4">
        <Sort class="mb-2" />
        <Cars />
    </main>
</template>
