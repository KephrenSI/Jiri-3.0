<template>
    <section class="content">
        <h2 class="heading2" role="heading" aria-level="2">Students</h2>

        <students-list></students-list>
    </section>
</template>

<script>
    import StudentsList from '../components/students/StudentsList'

    export default {
        name:'students',
        components: {
            StudentsList,
        },
    }
</script>