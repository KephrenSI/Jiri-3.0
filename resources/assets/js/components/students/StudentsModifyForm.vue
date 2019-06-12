<template>
    <section id="updateStudentCard" class="card contentAddForm">

        <div class="card-head">
            <h3 class="heading3" role="heading" aria-level="3">Modifier l'étudiant</h3>
            <div @click="closeCard" class="close">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.close"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="addForm form">
                <div class="addForm__labelInput labelInput">
                    <label for="name" class="addForm__labelInput--label label">Nom</label>
                    <input id="name" type="text" class="addForm__labelInput--input input" name="name" v-model="updateStudentData.name">
                </div>

                <div class="addForm__labelInput labelInput">
                    <label for="email" class="addForm__labelInput--label label">Email</label>
                    <input id="email" type="email" class="addForm__labelInput--input input" name="email" v-model="updateStudentData.email">

                </div>

                <div class="addForm__labelInput labelInput">
                    <button type="submit" class="addForm__labelInput--button" @click="updateStudent(updateStudentData.id)">
                        Modifier l'étudiant
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
        name:'students-update',
        props: [
            'students'
        ],
        data(){
            return {
                icons: {
                    close: close,
                },
                errors: [],
                updateStudentData: {},
            }
        },
        created() {
            eventBus.$on('updateStudentData', (message) => {
                this.updateStudentData = message;
            });
        },
        methods: {
            closeCard() {
                $(".card").removeClass("is-active").reload;
            },
            updateStudent(id) {
                axios.patch(`api/students/${id}`, this.updateStudentData)
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