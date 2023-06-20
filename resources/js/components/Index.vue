<template>
    <div>
        <navbar/>
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from "./Navbar.vue";

export default {
    name: 'Index',
    components: {
        Navbar
    },
}
</script>

<style>
body {
    background: url('/images/backgrounds/bg.png') no-repeat;
    background-position: center center;
    background-size: cover;
    background-attachment: fixed;
    padding-bottom: 100px;
}
@media (min-width: 922px) {
    body {
        background-position: center top 63px;
    }
}
</style>
