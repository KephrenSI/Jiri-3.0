<template>
    <section id="updateProjectCard" class="card contentAddForm">

        <div class="card-head">
            <h3 class="heading3" role="heading" aria-level="3">Modifier le projet</h3>
            <div @click="closeCard" class="close">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.close"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="addForm form">
                <div class="addForm__labelInput labelInput">
                    <label for="name" class="addForm__labelInput--label label">Nom</label>
                    <input id="name" type="text" class="addForm__labelInput--input input" name="name" v-model="updateProjectData.name">
                </div>

                <div class="addForm__labelInput labelInput">
                    <label for="description" class="addForm__labelInput--label label">Description</label>
                    <textarea id="description" class="addForm__labelInput--textarea textarea" name="description" v-model="updateProjectData.description">

                    </textarea>
                </div>

                <div class="addForm__labelInput labelInput">
                    <button type="submit" class="addForm__labelInput--button" @click="updateProject(updateProjectData.id)">
                        Modifier le projet
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
        name:'projects-update',
        props: [
            'projects'
        ],
        data(){
            return {
                icons: {
                    close: close,
                },
                errors: [],
                updateProjectData: {},
            }
        },
        created() {
            eventBus.$on('updateProjectData', (message) => {
                this.updateProjectData = message;
            });
        },
        methods: {
            closeCard() {
                $(".card").removeClass("is-active").reload;
            },
            updateProject(id) {
                axios.patch(`api/projects/${id}`, this.updateProjectData)
                    .then(response => {
                        this.closeCard();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
        },
    }
</script>