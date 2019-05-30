<template>
    <main class="main">
        <sidebar-menu-large></sidebar-menu-large>
        <router-view></router-view>
    </main>
</template>

<script>
    export default {
        mounted() {
            console.log('Main component mounted.')
        },
    }
</script>