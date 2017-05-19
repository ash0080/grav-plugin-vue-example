import App from './App.vue'

$(function () {
    let vm = new Vue({
        el: '#grav-plugin-vue-example-app', // vueAnchor defined in vue-example.php
        template: '<app/>',
        components: {
            App
        }
    })
})

