<template>
    <div class="">
        <input id="password-confirm" :type="show ? 'text' : 'password'" name="password_confirmation" class="labelInput__input input">
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show : false,
            }
        },
    }
</script>