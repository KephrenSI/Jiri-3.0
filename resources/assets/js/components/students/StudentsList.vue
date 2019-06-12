<template>
    <section class="contentList">
        <h3 class="heading3 hidden" role="heading" aria-level="3">Listes des étudiants</h3>

        <students-add :students="students"></students-add>
        <students-update :students="students"></students-update>
        <students-delete :students="students"></students-delete>
        <students-search></students-search>

        <div class="display-card">
            <button type="submit" class="display-card__button" @click="initAddStudent">
                Ajouter un étudiant
            </button>
        </div>

        <ul class="list">
            <students-item
                    v-for="student in filteredStudents"
                    :key="student.id"
                    :student="student"
            >

            </students-item>
        </ul>
    </section>
</template>

<script>
    import {eventBus} from "../../app.js";

    import StudentsItem from './StudentsItem';
    import StudentsAddForm from './StudentsAddForm';
    import StudentsModifyForm from './StudentsModifyForm';
    import StudentsDeleteForm from './StudentsDeleteForm';
    import StudentsSearchBar from './StudentsSearchBar';

    export default {
        name:'students-list',
        components: {
            StudentsItem,
            StudentsAddForm,
            StudentsModifyForm,
            StudentsDeleteForm,
            StudentsSearchBar,
        },
        data() {
            return {
                students: [],
                search: '',
            }
        },
        created() {
            eventBus.$on('searchStudent', (message) => {
                this.search = message;
            });
        },
        mounted() {
            this.readStudents();
            console.log('salut');
        },
        methods: {
            initAddStudent() {
                $("#addStudentCard").addClass("is-active");
            },
            readStudents() {
                axios.get('api/students')
                    .then(response => {
                        this.students = response.data;
                        console.log(response.data)
                    })
                    .catch( error => {
                        console.log(error);
                    });
            },
        },
        computed: {
            filteredStudents() {
                return this.students.filter((student) => {
                    return student.name.toLowerCase().match(this.search);
                });
            },
        },

    }
</script>