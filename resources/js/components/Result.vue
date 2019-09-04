<template>

<img @click="chooseGIF" :src="image" />

</template>

<script>
    export default {
        props: ['image'],
        methods: {
            chooseGIF() {
                this.$emit('chooseGIFEvent')
            }
        }
    }

</script>

<style>


</style>
