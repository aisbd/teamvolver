
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./helpers');
import Swal from 'sweetalert2'
window.Swal = Swal
require('vue2-animate/dist/vue2-animate.min.css')
require('vue2-animate/dist/vue2-animate.min.css')
window.Vue = require('vue');
Vue.component('form-team', require('./components/FormTeam.vue'));
Vue.component('projects', require('./components/Projects.vue'));
Vue.component('contact-us', require('./components/ContactUs.vue'));
Vue.component('register-form', require('./components/Register.vue'));
Vue.component('hexagon', require('./components/Hexagon.vue'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

if(document.querySelector('#app')){
    const app = new Vue({
        el: '#app'
    });
}
if(document.querySelector('#app3')){
    const app3 = new Vue({
        el: '#app3'
    });
}
if(document.querySelector('#app2')){
    const app2 = new Vue({
        el: '#app2'
    });
}
if(document.querySelector('#loginModal')){
    const app1 = new Vue({
        el: '#loginModal'
    });
}

 