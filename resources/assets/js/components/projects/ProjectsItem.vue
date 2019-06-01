<template>
    <li class="list__el">
        <p class="list__el--infos list__el--name">
            {{ name }}
        </p>
        <div class="list__el--infos list__el--description">
            <p>{{ description }}</p>
        </div>
        <div class="list__el--infos list__el--more" @click="showDropDown=!showDropDown">
            °°°
        </div>
        <div v-if="showDropDown" class="button-option">
            <div class="button-option--modify" @click="initUpdateProject()">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.design"></div>
            </div>
            <div class="button-option--delete" @click="initDeleteProject()">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.trash"></div>
            </div>
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
        template: "#dropdown",
        data(){
            return {
                showDropDown: false,
                icons: {
                    trash: trash,
                    design: design,
                },

                'id': this.project.id,
                'name': this.project.name,
                'description': this.project.description,
            }
        },
        created() {
            let self = this;

            window.addEventListener('click', function(e){
                if (!self.$el.contains(e.target)){
                    self.showDropDown = false
                }
            })
        },
        methods: {
            initOptions() {
                $(".button-option").addClass("is-active");
            },
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