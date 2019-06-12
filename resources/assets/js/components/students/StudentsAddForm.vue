<template>
    <section id="addStudentCard" class="card contentAddForm">

        <div class="card-head">
            <h3 class="heading3" role="heading" aria-level="3">Créer un étudiant</h3>
            <div  @click="closeCard" class="close">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.close"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="addForm form">
                <div class="addForm__labelInput labelInput">
                    <label for="name" class="addForm__labelInput--label label">Nom</label>
                    <input id="name" type="text" class="addForm__labelInput--input input" name="name" value="" v-model="student.name">
                </div>

                <div class="addForm__labelInput labelInput">
                    <label for="email" class="addForm__labelInput--label label">email</label>
                    <input id="email" type="email" class="addForm__labelInput--input input" name="email" value="" v-model="student.email">
                </div>

                <div class="addForm__labelInput labelInput">
                    <button type="submit" class="addForm__labelInput--button" @click="createStudent">
                        Créer l'étudiant
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
        name:'students-add',
        props: [
            'students'
        ],
        data(){
            return {
                icons: {
                    close: close,
                },
                errors: [],
                student: {
                    name: '',
                    email: ''
                },
            }
        },
        methods: {
            createStudent() {
                axios.post('api/students', this.student)
                    .then(response => {
                        this.students.push(response.data);
                        console.log(response.data);
                        this.reset();
                        this.closeCard();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
            reset() {
                this.student.name = '';
                this.student.email = '';
            },
            closeCard() {
                $(".card").removeClass("is-active");
            },
        },
        mounted(){
        }
    }
</script>