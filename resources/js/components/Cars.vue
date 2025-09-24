<template>
    <div class="grid grid-cols-1 gap-3">
        <Car v-for="car of this.cars"/>
    </div>
</template>

<script>
import {defineComponent} from "vue";

import Car from './Car.vue';

export default defineComponent({
    components: {
        Car,
    },
    data() {
        return {
            cars: [1, 2, 3, 4, 5, 6],
        };
    },
});
</script>
