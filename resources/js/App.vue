<template>
    <div class="container">
       <router-view></router-view>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        created() {
            this.$http.get('/ping').then((response)=> console.log(response))
        }
    }
</script>
<style lang="scss" scope>

</style>
