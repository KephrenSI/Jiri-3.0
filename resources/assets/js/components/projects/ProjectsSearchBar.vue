<template>
    <div class="searchForm__labelInput">
        <label for="search" class="searchForm__labelInput--label label ">Rechercher</label>
        <input @input='searchProject()' v-model="search" id="search" type="search" class="searchForm__labelInput--input input" name="search" value="">
        <!--<div class="" v-html="icons.loupe"></div>-->
    </div>
</template>

<script>
    import {eventBus} from "../../app.js";

    var loupe = require ('!html-loader!loupe.svg');

    export default {
        name: "projects-search",
        data() {
            return {
                icons: {
                    loupe: loupe,
                },
                search: '',
            }
        },
        methods: {
            searchProject() {
                eventBus.$emit('searchProject', this.search.toLowerCase())
            },
        }
    }
</script>