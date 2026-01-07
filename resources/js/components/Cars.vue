<script setup lang="ts">
import Car from '@/components/Car.vue';

const cars = [1, 2, 3, 4, 5, 6];
</script>

<template>
    <div class="grid grid-cols-1 gap-3">
        <Car v-for="car of cars" :key="car" />
    </div>
</template>
