/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require("vue");
import axios from 'axios';
import Toastr from '@enso-ui/toastr/bulma';
import ToastrPlugin from '@enso-ui/toastr';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

Vue.component('fa', FontAwesomeIcon);

// Vue.use(ToastrPlugin, {
//     layout: Toastr,
//     options: {
//         duration: 3500,
//         position: 'right',
//     },
// });
window.axios = axios;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('add-question', require('./components/AddQuestion.vue').default);
Vue.component('quiz-submit', require('./components/QuizSubmit.vue').default);
// Vue.component('eresult', require('./components/Eresult.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
