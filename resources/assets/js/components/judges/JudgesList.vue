<template>
    <section class="contentList">
        <h3 class="heading3 hidden" role="heading" aria-level="3">Listes des juges</h3>

        <judges-add :judges="judges"></judges-add>
        <judges-update :judges="judges"></judges-update>
        <judges-delete :judges="judges"></judges-delete>
        <judges-search></judges-search>

        <div class="display-card">
            <button type="submit" class="display-card__button" @click="initAddJudge">
                Ajouter un juge
            </button>
        </div>

        <ul class="list">
            <judges-item
                    v-for="judge in filteredJudges"
                    :key="judge.id"
                    :judge="judge"
            >

            </judges-item>
        </ul>
    </section>
</template>

<script>
    import {eventBus} from "../../app.js";

    import JudgesItem from './JudgesItem';
    import JudgesAddForm from './JudgesAddForm';
    import JudgesModifyForm from './JudgesModifyForm';
    import JudgesDeleteForm from './JudgesDeleteForm';
    import JudgesSearchBar from './JudgesSearchBar';

    export default {
        name:'judges-list',
        components: {
            JudgesItem,
            JudgesAddForm,
            JudgesModifyForm,
            JudgesDeleteForm,
            JudgesSearchBar,
        },
        data() {
            return {
                judges: [],
                search: '',
            }
        },
        created() {
            eventBus.$on('searchJudge', (message) => {
                this.search = message;
            });
        },
        mounted() {
            this.readJudges();
            console.log('salut');
        },
        methods: {
            initAddJudge() {
                $("#addJudgeCard").addClass("is-active");
            },
            readJudges() {
                axios.get('api/judges')
                    .then(response => {
                        this.judges = response.data;
                        console.log(response.data)
                    })
                    .catch( error => {
                        console.log(error);
                    });
            },
        },
        computed: {
            filteredJudges() {
                return this.judges.filter((judge) => {
                    return judge.name.toLowerCase().match(this.search);
                });
            },
        },

    }
</script>