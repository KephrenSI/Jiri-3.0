<template>
    <li class="list__el">
        <p class="list__el--infos list__el--name">
            {{ name }}
        </p>
        <div class="list__el--infos list__el--email">
            <p>{{ email }}</p>
        </div>
        <div class="list__el--infos list__el--more" @click="showDropDown=!showDropDown">
            °°°
        </div>
        <div v-if="showDropDown" class="button-option">
            <div class="button-option--modify" @click="initUpdateStudent()">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.design"></div>
            </div>
            <div class="button-option--delete" @click="initDeleteStudent()">
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
        name: 'students-item',
        props: {
            student: {
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

                'id': this.student.id,
                'name': this.student.name,
                'email': this.student.email,
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
            initUpdateStudent() {
                this.errors = [];
                $("#updateStudentCard").addClass("is-active");
                this.updateStudentData();
                console.log(this.updateStudentData);
                console.log(this.student);
            },
            initDeleteStudent() {
                this.errors = [];
                $("#deleteStudentCard").addClass("is-active");
                this.deleteStudentData();
            },
            updateStudentData() {
                eventBus.$emit('updateStudentData', this.student)
            },
            deleteStudentData() {
                eventBus.$emit('deleteStudentData', this.student)
            },
        },
    }
</script>