<template>
    <div id="app" :class="{'login':isLogin}" style="zoom:1">
        {{ message }}
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                message: "Hello Vue!",
            }
        },
    }
</script>

<style scoped>
    /*@import 'assets/css/font-awesome.min.css';*/
    /*@import "assets/css/bulma.css";*/
    #app {
        background-color:yellow;
    }
</style>