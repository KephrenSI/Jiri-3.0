<template>
    <div>
        <p>
            <input type="text" v-model="name">
            <input type="checkbox" v-model="checkbox">
        </p>
        <p>Bonjour {{name}} !</p>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return{
                'name' : 'Thibault',
                'checkbox' : true
            }
        },
    }
</script>
