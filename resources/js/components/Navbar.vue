<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="d-flex flex-wrap w-100 px-2">
            <router-link to="/" class="navbar-brand">Example</router-link>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link :to="{ name: 'test' }" class="nav-link active" aria-current="page">
                        Test
                    </router-link>
                </li>
            </ul>

            <div class="right-menu d-flex align-items-center py-2 py-lg-0">
                    <div class="nav-item dropdown" v-if="auth">
                        <a class="nav-link dropdown-toggle" href="#">
                            Cadregich
                        </a>
                        <div class="d-flex flex-column align-items-start">
                            <ul class="dropdown-menu dropdown-menu-end flex-column">
                                <li>
                                    <router-link to="/cabinet" class="text-decoration-none">
                                        <button class="dropdown-item text-center">Кабинет</button>
                                    </router-link>
                                </li>
                                <li>
                                    <router-link to="/logout" class="text-decoration-none">
                                        <button class="dropdown-item text-center">Выйти</button>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                    </div>

                <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <router-link :to="{ name: 'test' }" class="nav-link active" aria-current="page">
                            Test2
                        </router-link>
                    </li>
                </ul>

                <ul class="navbar-nav mb-2 mb-lg-0" id="navbar-auth-block">
                    <li class="nav-item" v-if="!auth">
                        <router-link :to="{ name: 'login' }" class="nav-link active" aria-current="page">
                            Войти
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import {Dropdown} from "bootstrap";

export default {
    name: "Navbar",
    data() {
        return {
            auth: true,
        }
    },
    mounted() {
        const element = document.getElementsByClassName('dropdown')[0];
        const elementMenu = document.getElementsByClassName('dropdown-menu')[0];
        const dropdown = new Dropdown(element);
        element.addEventListener('mouseenter', function () {
            dropdown.show();
            elementMenu.style.display = 'flex';
        });
        element.addEventListener('mouseleave', function () {
            dropdown.hide();
            elementMenu.style.display = 'none';
        });
        element.addEventListener('mouseleave', function () {
            dropdown.hide();
            elementMenu.style.display = 'none';
        });
    }
}
</script>

<style scoped>
.right-menu {
    position: absolute;
    top: 0;
    right: 0;
}

@media (min-width: 992px) {
    .right-menu {
        height: 100%;
    }
}

.right-menu > * {
    margin-right: 0.5rem;
}

.navbar {
    border-bottom: solid 2px hotpink;
}

.dropdown-menu {
    margin: 0;
    left: auto;
}

#navbar-auth-block {
    margin-left: auto;
}
</style>
