<script setup lang="ts">
import Sort from '@/components/Sort.vue';
import Cars from '@/components/Cars.vue';
</script>

<template>
    <header class="p-4 bg-[rgb(45,91,45)] text-white border-b-[6px] border-b-[rgb(255,209,3)]">
        <span class="text-2xl">Car & Classic</span>
    </header>

    <main class="mx-auto max-w-screen-xl p-2">
        <Sort class="mb-2"></Sort>
        <Cars></Cars>
    </main>
</template>
