<template>
    <section class="content">
        <h2 class="heading2" role="heading" aria-level="2">Projects</h2>
        <div class="display-card">
            <button type="submit" class="display-card__button" @click="initAddProject">
                Ajouter un projet
            </button>
        </div>
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
        methods: {
            initAddProject() {
                $("#addProjectCard").addClass("is-active");
            },
        },
    }
</script>