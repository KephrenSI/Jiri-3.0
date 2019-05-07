<template>
    <section class="contentAddForm">
        <h3 class="heading3" role="heading" aria-level="3">Créer un étudiant</h3>
        <form method="POST" class="addForm form">
            <div class="addForm__labelInput labelInput">
                <label for="name" class="addForm__labelInput--label label">Nom</label>
                <input id="name" type="text" class="addForm__labelInput--input input" name="name" value="">
            </div>

            <div class="addForm__labelInput labelInput">
                <label for="email" class="addForm__labelInput--label label">Adresse mail</label>
                <input id="email" type="email" class="addForm__labelInput--input input" name="email" value="">
            </div>

            <div class="addForm__labelInput labelInput">
                <label for="file" class="addForm__labelInput--fileLabel label">Photo</label>
                <input id="file" type="file" class="addForm__labelInput--fileInput" name="file" value="">
            </div>

            <div class="addForm__labelInput labelInput">
                <button type="submit" class="addForm__labelInput--button">
                    Ajouter un étudiant
                </button>
            </div>
        </form>
    </section>
</template>

<script>
    export default {
        name: "ListEvents",
        mounted() {
            console.log('Students component mounted.')
        },
    }
</script>