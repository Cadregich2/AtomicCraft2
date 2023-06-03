<template>
    <div class="content-block mt-5 w-100 d-flex justify-content-center">
        <img class="content-block-content" alt="Контент страницы" src="/images/main-page-content-1.jpg">
        <div class="content-block-game-items w-25">
            <div class="game-items w-100">
                <div>
                    <img class="item item-1" alt="Item 1" src="/images/item1.png">
                    <img class="item item-2" alt="Item 2" src="/images/item1.png">
                </div>
                <div style="margin-top: 4%">
                    <img class="item item-3" alt="Item 3" src="/images/item1.png">
                    <img class="item item-4" alt="Item 4" src="/images/item1.png">
                    <img class="item item-5" alt="Item 5" src="/images/item1.png">
                </div>
                <div style="margin-top: 4%">
                    <img class="item item-6" alt="Item 6" src="/images/item1.png">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home"
}
</script>

<style scoped>
.content-block-content {
    border: 1px solid black;
    width: 50%;
    max-width: 1200px;
}

.content-block-game-items {
    border: 1px solid black;
}
.game-items {
    margin-top: 10%;
    transform: rotate(10deg);
    margin-left: 5%;
}
.item {
    border: 1px solid black;
    position: relative;
}

.item-1 {
    width: 25%;
    margin-left: 12%;
}
.item-2 {
    width: 25%;
    margin-left: 13%;
}
.item-3 {
    margin-left: 13%;
    width: 14%;
    margin-top: 8%;
}
.item-4 {
    width: 18%;
    margin-left: 7%;
    margin-bottom: 2%;
}
.item-5 {
    margin-left: 9%;
    width: 14%;
    margin-top: 6%;
}
.item-6 {
    width: 18%;
    margin-left: 33%;
}
</style>
