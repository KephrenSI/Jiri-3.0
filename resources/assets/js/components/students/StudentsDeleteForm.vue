<template>
    <section id="deleteStudentCard" class="card contentAddForm">

        <div class="card-head">
            <h3 class="heading3" role="heading" aria-level="3">Supprimer l'étudiant</h3>
            <div @click="closeCard" class="close">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.close"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="addForm form">
                <div class="addForm__labelInput labelInput">
                    <p> Êtes vous certain de vouloir supprimer l'étudiant {{ deleteStudentData.name }}?</p>
                </div>

                <div class="addForm__labelInput labelInput">
                    <button type="submit" class="addForm__labelInput--button" @click="closeCard">
                        NON
                    </button>
                    <button type="submit" class="addForm__labelInput--button" @click="deleteStudent(deleteStudentData.id)">
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
        name:'students-delete',
        props: [
            'students'
        ],
        data(){
            return {
                icons: {
                    close: close,
                },
                errors: [],
                deleteStudentData: {},
            }
        },
        created() {
            eventBus.$on('deleteStudentData', (message) => {
                this.deleteStudentData = message;
            });
        },
        methods: {
            closeCard() {
                $(".card").removeClass("is-active");
            },
            deleteStudent(id) {
                axios.delete(`api/students/${id}`)
                    .then(() => {
                        let index = this.students.findIndex(student => student.id == id);
                        this.students.splice(index , 1);
                        this.closeCard();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
        },
    }
</script>