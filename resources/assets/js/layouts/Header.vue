<template>
    <header class="header">
        <h2 class="heading2 hidden" role="heading" aria-level="2">Header</h2>
        <img class="header__logo" v-for="image in images" :src="image.url" :alt="image.name" height="60" width="120"/>
    </header>
</template>

<script>
    export default {
        data() {
            return {
                images : [
                    {
                        url : 'images/logoBlanc.png',
                        name : 'logo de l\'application Jiri',
                    },
                ]
            }
        },
        mounted() {
            console.log('Header component mounted.')
        },
    }
</script>