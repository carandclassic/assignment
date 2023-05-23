<template>
    <div>
        <Car v-for="x in [1, 2]"></Car>
    </div>
</template>

<script>
import Car from './Car.vue';

export default {
    components: {
        Car
    }
}
</script>