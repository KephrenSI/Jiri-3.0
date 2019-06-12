<template>
    <section id="deleteJudgeCard" class="card contentAddForm">

        <div class="card-head">
            <h3 class="heading3" role="heading" aria-level="3">Supprimer le juge</h3>
            <div @click="closeCard" class="close">
                <span class="notEmpty">&nbsp;</span>
                <div class="" v-html="icons.close"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="addForm form">
                <div class="addForm__labelInput labelInput">
                    <p> Êtes vous certain de vouloir supprimer le juge {{ deleteJudgeData.name }}?</p>
                </div>

                <div class="addForm__labelInput labelInput">
                    <button type="submit" class="addForm__labelInput--button" @click="closeCard">
                        NON
                    </button>
                    <button type="submit" class="addForm__labelInput--button" @click="deleteJudge(deleteJudgeData.id)">
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
        name:'judges-delete',
        props: [
            'judges'
        ],
        data(){
            return {
                icons: {
                    close: close,
                },
                errors: [],
                deleteJudgeData: {},
            }
        },
        created() {
            eventBus.$on('deleteJudgeData', (message) => {
                this.deleteJudgeData = message;
            });
        },
        methods: {
            closeCard() {
                $(".card").removeClass("is-active");
            },
            deleteJudge(id) {
                axios.delete(`api/judges/${id}`)
                    .then(() => {
                        let index = this.judges.findIndex(judge => judge.id == id);
                        this.judges.splice(index , 1);
                        this.closeCard();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
        },
    }
</script>