<template>
    <div class="superGlobal">
        <header-top></header-top>
        <aside-menu></aside-menu>
        <router-view></router-view>
        <footer-bottom></footer-bottom>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Main component mounted.')
        },
    }
</script>