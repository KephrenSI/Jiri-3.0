<template>
    <section class="content">
        <h2 class="heading2" role="heading" aria-level="2">Projects</h2>

        <projects-list></projects-list>
    </section>
</template>

<script>
    import ProjectsList from '../components/projects/ProjectsList'

    export default {
        name:'projects',
        components: {
            ProjectsList,
        },
    }
</script>