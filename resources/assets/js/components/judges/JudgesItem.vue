<template>
    <li class="list__el">
        <p class="list__el--infos list__el--name">
            {{ name }}
        </p>
        <div class="list__el--infos list__el--email">
            <p>{{ email }}</p>
        </div>
        <div class="list__el--infos list__el--agency">
            <p>{{ agency }}</p>
        </div>
        <div class="list__el--infos list__el--more" @click="showDropDown=!showDropDown">
            °°°
        </div>
        <div v-if="showDropDown" class="button-option">
            <div class="button-option--modify" @click="initUpdateJudge()">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.design"></div>
            </div>
            <div class="button-option--delete" @click="initDeleteJudge()">
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
        name: 'judges-item',
        props: {
            judge: {
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

                'id': this.judge.id,
                'name': this.judge.name,
                'email': this.judge.email,
                'agency': this.judge.agency,
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
            initUpdateJudge() {
                this.errors = [];
                $("#updateJudgeCard").addClass("is-active");
                this.updateJudgeData();
                console.log(this.updateJudgeData);
                console.log(this.judge);
            },
            initDeleteJudge() {
                this.errors = [];
                $("#deleteJudgeCard").addClass("is-active");
                this.deleteJudgeData();
            },
            updateJudgeData() {
                eventBus.$emit('updateJudgeData', this.judge)
            },
            deleteJudgeData() {
                eventBus.$emit('deleteJudgeData', this.judge)
            },
        },
    }
</script>