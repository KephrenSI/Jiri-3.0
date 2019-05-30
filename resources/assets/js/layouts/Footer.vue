<template>
    <footer class="footer">
        <h2 class="heading2 hidden" role="heading" aria-level="2">Footer</h2>
        <section class="footer__cpr">
            <p class="footer__cpr--txt">Jiri 2018-2019 <a rel="author" title="naviguer vers le site internet de Képhren Simonis" href="https://kephren-simonis.be" class="footer__cpr--link">képhren SIMONIS</a> All right reserved.</p>
        </section>
        <section class="footer__social">
            <a href="">facebook</a>
            <a href="">instagram</a>
        </section>
    </footer>
</template>

<script>
    export default {
        mounted() {
            console.log('Footer component mounted.')
        },
    }
</script>