<template>
    <div>
        <header id="header">
            <div class="container">
                <div id="header_left">
                    <img :src="logo_url" alt="logo spotify">
                </div>
                <div id="header_right">
                    <ul>
                        <li>
                            <a href="#">Cookie</a>
                        </li>
                        <li>
                            <a href="#" @click="openModal">Session</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <Modal :logo="logo_url"/>
    </div>
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
    },
    mounted() {
        const modalWindowContainer = document.querySelector('#modal_window_container');

        // gestione dei cookies
        if (document.cookie.indexOf('modal_shown') >= 0) {
            //non succede più nulla perchè il cookie è già presente
        } else {
            document.cookie = 'modal_shown=seen';
            modalWindowContainer.style.display = 'block';
        }

        console.log(document.cookie.indexOf('modal_shown'));
    },
    methods: {
        openModal() {
            const modalWindowContainer = document.querySelector('#modal_window_container');
            modalWindowContainer.style.display = 'block';
        }
    }
}
</script>

<style lang="scss" scoped>
#header {
    padding-top: 20px;
    padding-bottom: 20px;
    background-color: #4483E3;

    .container {
        display: flex;

        #header_left {
            display: flex;
            align-items: center;
            width: 50%;

            img {
                width: 150px;
            }
        }
        #header_right {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 50%;

            ul {
                li {
                    font-weight: bold;

                    a {
                        text-decoration: none;
                        color: white;
                    }
                 }
                li:first-child {
                    border-right: 1px solid white;
                    padding-right: 20px;
                }
            }
        }
    }
}
</style>
