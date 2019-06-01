<template>
    <section class="contentList">
        <h3 class="heading3 hidden" role="heading" aria-level="3">Listes des projets</h3>

        <projects-add :projects="projects"></projects-add>
        <projects-update :projects="projects"></projects-update>
        <projects-delete :projects="projects"></projects-delete>
        <projects-search></projects-search>

        <div class="display-card">
            <button type="submit" class="display-card__button" @click="initAddProject">
                Ajouter un projet
            </button>
        </div>

        <ul class="list">
            <projects-item
                    v-for="project in filteredProjects"
                    :key="project.id"
                    :project="project"
            >

            </projects-item>
        </ul>
    </section>
</template>

<script>
    import {eventBus} from "../../app.js";

    import ProjectsItem from './ProjectsItem';
    import ProjectsAddForm from './ProjectsAddForm';
    import ProjectsModifyForm from './ProjectsModifyForm';
    import ProjectsDeleteForm from './ProjectsDeleteForm';
    import ProjectsSearchBar from './ProjectsSearchBar';

    export default {
        name:'projects-list',
        components: {
            ProjectsItem,
            ProjectsAddForm,
            ProjectsModifyForm,
            ProjectsDeleteForm,
            ProjectsSearchBar,
        },
        data() {
            return {
                projects: [],
                search: '',
            }
        },
        created() {
            eventBus.$on('searchProject', (message) => {
                this.search = message;
            });
        },
        mounted() {
            this.readProjects();
            console.log('salut');
        },
        methods: {
            initAddProject() {
                $("#addProjectCard").addClass("is-active");
            },
            readProjects() {
                axios.get('api/projects')
                    .then(response => {
                        this.projects = response.data;
                        console.log(response.data)
                    })
                    .catch( error => {
                        console.log(error);
                    });
            },
        },
        computed: {
            filteredProjects() {
                return this.projects.filter((project) => {
                    return project.name.toLowerCase().match(this.search);
                });
            },
        },

    }
</script>