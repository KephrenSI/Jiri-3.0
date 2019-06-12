<template>
    <div class="searchForm__labelInput">
        <label for="search" class="searchForm__labelInput--label label ">Rechercher</label>
        <input @input='searchJudge()' v-model="search" id="search" type="text" class="searchForm__labelInput--input input" name="search" value="" autocomplete="off">
        <!--<div class="" v-html="icons.loupe"></div>-->
    </div>
</template>

<script>
    import {eventBus} from "../../app.js";

    var loupe = require ('!html-loader!loupe.svg');

    export default {
        name: "judges-search",
        data() {
            return {
                icons: {
                    loupe: loupe,
                },
                search: '',
            }
        },
        methods: {
            searchJudge() {
                eventBus.$emit('searchJudge', this.search.toLowerCase())
            },
        }
    }
</script>