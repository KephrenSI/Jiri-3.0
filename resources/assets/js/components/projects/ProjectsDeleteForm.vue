<template>
    <section id="deleteProjectCard" class="card contentAddForm">

        <div class="card-head">
            <h3 class="heading3" role="heading" aria-level="3">Supprimer le projet</h3>
            <div @click="closeCard" class="close">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.close"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="addForm form">
                <div class="addForm__labelInput labelInput">
                    <p> Êtes vous certain de vouloir supprimer le projet {{ deleteProjectData.name }}?</p>
                </div>

                <div class="addForm__labelInput labelInput">
                    <button type="submit" class="addForm__labelInput--button" @click="closeCard">
                        NON
                    </button>
                    <button type="submit" class="addForm__labelInput--button" @click="deleteProject(deleteProjectData.id)">
                        OUI
                    </button>
                </div>
            </div>
            <div class="addForm__error" v-if="errors.length > 0">
                <div class="addForm__error--message">
                    <ul>
                        <li v-for="error in errors">{{ error }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import {eventBus} from "../../app.js";

    var close = require ('!html-loader!close.svg');

    export default{
        name:'projects-delete',
        props: [
            'projects'
        ],
        data(){
            return {
                icons: {
                    close: close,
                },
                errors: [],
                deleteProjectData: {},
            }
        },
        created() {
            eventBus.$on('deleteProjectData', (message) => {
                this.deleteProjectData = message;
            });
        },
        methods: {
            closeCard() {
                $(".card").removeClass("is-active");
            },
            deleteProject(id) {
                axios.delete(`api/projects/${id}`)
                    .then(() => {
                        let index = this.projects.findIndex(project => project.id == id);
                        this.projects.splice(index , 1);
                        this.closeCard();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
        },
    }
</script>