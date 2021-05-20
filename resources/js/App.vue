<template>
    <Modal :logo="logo_url"/>
</template>

<script>
import Modal from "./components/Modal.vue";

export default {
    name: "App",
    components: {
        Modal
    },
    data() {
        return {
            logo_url: '/img/logo.png'
        };
    }
}
</script>

<style scoped>

</style>
