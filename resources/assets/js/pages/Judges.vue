<template>
    <section class="container">
        <h2 class="heading2 hidden" role="heading" aria-level="2">Projects</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Judges Component</div>

                    <div class="card-body">
                        List all judges in DB
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('List all judges in DB')
        }
    }
</script>