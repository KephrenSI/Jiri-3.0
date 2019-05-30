<template>
    <section class="contentSearchForm">
        <h3 class="heading3 hidden" role="heading" aria-level="3">Rechercher un projet</h3>
        <form method="POST" class="searchForm form">
            <div class="searchForm__labelInput">
                <label for="search" class="searchForm__labelInput--label label ">Rechercher</label>
                <input id="search" type="search" class="searchForm__labelInput--input input" name="search" value="">
            </div>
            <div class="searchForm__labelInput">
                <button type="submit" class="searchForm__labelInput--button">
                    <div class="" v-html="icons.loupe"></div>
                </button>
            </div>
        </form>
    </section>
</template>

<script>
    var loupe = require ('!html-loader!loupe.svg');

    export default {
        name: "ListEvents",
        data() {
            return {
                icons: {
                    loupe: loupe,
                },
            }
        },
        mounted() {
            console.log('Projects component mounted.')
        },
    }
</script>