<template>
    <li class="list__el">
        <p class="list__el--infos list__el--name">
            {{ name }}
        </p>
        <p class="list__el--infos list__el--description">
            {{ description }}
        </p>
        <div class="list__el--infos list__el--modify" @click="initUpdateProject()">
            <span class="notEmpty">&nbsp;</span>
            <div class="" v-html="icons.design"></div>
        </div>
        <div class="list__el--infos list__el--delete" @click="initDeleteProject()">
            <span class="notEmpty">&nbsp;</span>
            <div class="" v-html="icons.trash"></div>
        </div>
    </li>
</template>

<script>
    import {eventBus} from "../../app.js";

    var trash = require ('!html-loader!trash.svg');
    var design = require ('!html-loader!design.svg');

    export default {
        name: 'projects-item',
        props: {
            project: {
                type: Object,
                required:true,
            },
        },
        data(){
            return {
                icons: {
                    trash: trash,
                    design: design,
                },

                'id': this.project.id,
                'name': this.project.name,
                'description': this.project.description,
            }
        },
        methods: {
            initUpdateProject() {
                this.errors = [];
                $("#updateProjectCard").addClass("is-active");
                this.updateProjectData();
                console.log(this.updateProjectData);
                console.log(this.project);
            },
            initDeleteProject() {
                this.errors = [];
                $("#deleteProjectCard").addClass("is-active");
                this.deleteProjectData();
            },
            updateProjectData() {
                eventBus.$emit('updateProjectData', this.project)
            },
            deleteProjectData() {
                eventBus.$emit('deleteProjectData', this.project)
            },
        },
    }
</script>