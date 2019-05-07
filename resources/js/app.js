
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import store from './store/index.js';
import router from './routes/router.js';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('app', require('./App.vue').default);

Vue.component('header-top', require('./components/partials/Header.vue').default);
Vue.component('footer-bottom', require('./components/partials/Footer.vue').default);

Vue.component('password-input', require('./components/form/PasswordInput.vue').default);
Vue.component('confirm-password-input', require('./components/form/ConfirmPasswordInput.vue').default);

Vue.component('aside-menu', require('./components/navigation/AsideMenu.vue').default);

Vue.component('add-events', require('./components/add/AddEvents.vue').default);
Vue.component('add-judges', require('./components/add/AddJudges.vue').default);
Vue.component('add-projects', require('./components/add/AddProjects.vue').default);
Vue.component('add-students', require('./components/add/AddStudents.vue').default);

Vue.component('search-events', require('./components/search/SearchEvents.vue').default);
Vue.component('search-judges', require('./components/search/SearchJudges.vue').default);
Vue.component('search-projects', require('./components/search/SearchProjects.vue').default);
Vue.component('search-students', require('./components/search/SearchStudents.vue').default);

// Vue.component('list-events', require('./views/ListEvents.vue').default);
// Vue.component('list-judges', require('./views/ListJudges.vue').default);
// Vue.component('list-projects', require('./views/ListProjects.vue').default);
// Vue.component('list-students', require('./views/ListStudents.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    store
});
