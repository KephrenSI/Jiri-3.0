<template>
    <section id="updateJudgeCard" class="card contentAddForm">

        <div class="card-head">
            <h3 class="heading3" role="heading" aria-level="3">Modifier le juge</h3>
            <div @click="closeCard" class="close">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.close"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="addForm form">
                <div class="addForm__labelInput labelInput">
                    <label for="name" class="addForm__labelInput--label label">Nom</label>
                    <input id="name" type="text" class="addForm__labelInput--input input" name="name" v-model="updateJudgeData.name">
                </div>

                <div class="addForm__labelInput labelInput">
                    <label for="email" class="addForm__labelInput--label label">Email</label>
                    <input id="email" type="email" class="addForm__labelInput--input input" name="email" v-model="updateJudgeData.email">
                </div>

                <div class="addForm__labelInput labelInput">
                    <label for="agency" class="addForm__labelInput--label label">Agence</label>
                    <input id="agency" type="text" class="addForm__labelInput--input input" name="agency" v-model="updateJudgeData.agency">
                </div>

                <div class="addForm__labelInput labelInput">
                    <button type="submit" class="addForm__labelInput--button" @click="updateJudge(updateJudgeData.id)">
                        Modifier le juge
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
        name:'judges-update',
        props: [
            'judges'
        ],
        data(){
            return {
                icons: {
                    close: close,
                },
                errors: [],
                updateJudgeData: {},
            }
        },
        created() {
            eventBus.$on('updateJudgeData', (message) => {
                this.updateJudgeData = message;
            });
        },
        methods: {
            closeCard() {
                $(".card").removeClass("is-active").reload;
            },
            updateJudge(id) {
                axios.patch(`api/judges/${id}`, this.updateJudgeData)
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