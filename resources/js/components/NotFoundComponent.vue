<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Error Componente</div>

                    <div class="card-body">
                        Error 404
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {

            }
        },
        methods: {
            testconsole(){
                console.log('error page 404')
            }
        },
        mounted() {
            this.testconsole();
        }
    }
</script>
