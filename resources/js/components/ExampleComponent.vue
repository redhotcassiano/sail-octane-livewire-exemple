<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Example</div>
                    <div class="card-body">
                        Development...
                        Teste
                    </div>
                </div>
            </div>
        </div>
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
