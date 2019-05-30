<template>
    <section id="addProjectCard" class="card contentAddForm">

        <div class="card-head">
            <h3 class="heading3" role="heading" aria-level="3">Créer un projet</h3>
            <div  @click="closeCard" class="close">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.close"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="addForm form">
                <div class="addForm__labelInput labelInput">
                    <label for="name" class="addForm__labelInput--label label">Nom</label>
                    <input id="name" type="text" class="addForm__labelInput--input input" name="name" value="" v-model="project.name">
                </div>

                <div class="addForm__labelInput labelInput">
                    <label for="description" class="addForm__labelInput--label label">Description</label>
                    <textarea id="description" class="addForm__labelInput--textarea textarea" name="description" value="" v-model="project.description">
                    </textarea>
                </div>

                <div class="addForm__labelInput labelInput">
                    <button type="submit" class="addForm__labelInput--button" @click="createProject">
                        Créer le projet
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
    var close = require ('!html-loader!close.svg');

    export default{
        name:'projects-add',
        props: [
            'projects'
        ],
        data(){
            return {
                icons: {
                    close: close,
                },
                errors: [],
                project: {
                    name: '',
                    description: ''
                },
            }
        },
        methods: {
            createProject() {
                axios.post('api/projects', this.project)
                    .then(response => {
                        this.projects.push(response.data);
                        this.reset();
                        this.closeCard();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
            reset() {
                this.project.name = '';
                this.project.description = '';
            },
            closeCard() {
                $(".card").removeClass("is-active");
            },
        },
        mounted(){
        }
    }
</script>