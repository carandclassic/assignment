<script setup lang="ts">
import Cars from '@/components/Cars.vue';
import Sort from '@/components/Sort.vue';
import AppLayout from '@/layouts/AppLayout.vue';

defineOptions({
    layout: AppLayout,
});
</script>

<template>
    <Sort class="mb-2" />
    <Cars />
</template>
