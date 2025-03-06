<script setup lang="ts">
import { ref } from "vue";

import Car from "./Car.vue";

const cars = ref([1, 2, 3, 4, 5, 6]);
</script>

<template>
    <div class="grid grid-cols-1 gap-3">
        <Car v-for="car of cars" />
    </div>
</template>
