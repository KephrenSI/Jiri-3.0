<template>
    <section class="content">
        <h2 class="heading2" role="heading" aria-level="2">Students</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Students Component</div>

                    <div class="card-body">
                        List all students in DB
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('List all students in DB')
        }
    }
</script>