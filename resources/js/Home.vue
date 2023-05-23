<template>
    <Sort></Sort>
    <Cars></Cars>
</template>

<style>
    body {
        font-family: 'figtree';
    }
</style>

<script>
    import Cars from './Cars.vue';
    import Sort from './Sort.vue';

    export default {
        components: {
            Cars,
            Sort
        }
    }
</script>