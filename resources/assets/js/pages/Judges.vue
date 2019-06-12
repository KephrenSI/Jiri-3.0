<template>
    <section class="content">
        <h2 class="heading2" role="heading" aria-level="2">Judges</h2>

        <judges-list></judges-list>
    </section>
</template>

<script>
    import JudgesList from '../components/judges/JudgesList'

    export default {
        name:'judges',
        components: {
            JudgesList,
        },
    }
</script>