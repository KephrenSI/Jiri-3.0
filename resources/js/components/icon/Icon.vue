<template>
    <div v-html="require ('!html-loader!{icon}.svg')"></div>
</template>

<script>
    export default {
        props: ['icon']
    };
</script>