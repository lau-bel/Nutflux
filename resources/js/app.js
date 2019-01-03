require('./bootstrap');

window.Vue = require('vue');

Vue.component('anim', require('./components/Anim.vue'));
Vue.component('logo', require('./components/Logo.vue'));
Vue.component('login', require('./components/Login.vue'));
Vue.component('signin', require('./components/Signin.vue'));
Vue.component('slogan', require('./components/Slogan.vue'));

const app = new Vue({
    el: '#app'
});
