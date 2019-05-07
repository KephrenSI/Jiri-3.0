<template>
    <section class="contentAddForm">
        <h3 class="heading3" role="heading" aria-level="3">Créer un projet</h3>
        <form method="POST" class="addForm form">
            <div class="addForm__labelInput labelInput">
                <label for="name" class="addForm__labelInput--label label">Nom</label>
                <input id="name" type="text" class="addForm__labelInput--input input" name="name" value="">
            </div>

            <div class="addForm__labelInput labelInput">
                <label for="description" class="addForm__labelInput--label label">Description</label>
                <textarea id="description" class="addForm__labelInput--textarea textarea" name="description" value="">

                </textarea>
            </div>

            <div class="addForm__labelInput labelInput">
                <button type="submit" class="addForm__labelInput--button">
                    Ajouter un juré
                </button>
            </div>
        </form>
    </section>
</template>

<script>
    export default {
        name: "ListEvents",
        mounted() {
            console.log('Projects component mounted.')
        },
    }
</script>