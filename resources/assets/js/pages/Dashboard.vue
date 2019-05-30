<template>
    <section class="container">
        <h2 class="heading2 hidden" role="heading" aria-level="2">Dashboard</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard Component</div>

                    <div class="card-body">
                        List current user jiries
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('List current user jiries')
        }
    }
</script>