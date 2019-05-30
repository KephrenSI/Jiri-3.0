/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
export const eventBus = new Vue();

// import App from './views/App.vue';

import store from './store/index.js';
import router from './routes/index.js';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('app', require('./views/App.vue').default);

Vue.component('header-top', require('./layouts/Header.vue').default);
Vue.component('footer-bottom', require('./layouts/Footer.vue').default);

Vue.component('sidebar-menu-large', require('./layouts/SidebarMenuLarge.vue').default);
Vue.component('sidebar-menu-small', require('./layouts/SidebarMenuSmall.vue').default);

Vue.component('judges-list', require('./components/judges/JudgesList.vue').default);
Vue.component('judges-item', require('./components/judges/JudgesItem.vue').default);
Vue.component('judges-add', require('./components/judges/JudgesAddForm.vue').default);
Vue.component('judges-update', require('./components/judges/JudgesModifyForm.vue').default);
Vue.component('judges-delete', require('./components/judges/JudgesDeleteForm.vue').default);
Vue.component('judges-search', require('./components/judges/JudgesSearchBar.vue').default);
Vue.component('judges-count', require('./components/judges/JudgesCounter.vue').default);
Vue.component('judges-filtered', require('./components/judges/JudgesFiltered.vue').default);

Vue.component('students-list', require('./components/students/StudentsList.vue').default);
Vue.component('students-item', require('./components/students/StudentsItem.vue').default);
Vue.component('students-add', require('./components/students/StudentsAddForm.vue').default);
Vue.component('students-update', require('./components/students/StudentsModifyForm.vue').default);
Vue.component('students-delete', require('./components/students/StudentsDeleteForm.vue').default);
Vue.component('students-search', require('./components/students/StudentsSearchBar.vue').default);
Vue.component('students-count', require('./components/students/StudentsCounter.vue').default);
Vue.component('students-filtered', require('./components/students/StudentsFiltered.vue').default);

Vue.component('projects-list', require('./components/projects/ProjectsList.vue').default);
Vue.component('projects-item', require('./components/projects/ProjectsItem.vue').default);
Vue.component('projects-add', require('./components/projects/ProjectsAddForm.vue').default);
Vue.component('projects-update', require('./components/projects/ProjectsModifyForm.vue').default);
Vue.component('projects-delete', require('./components/projects/ProjectsDeleteForm.vue').default);
Vue.component('projects-search', require('./components/projects/ProjectsSearchBar.vue').default);
Vue.component('projects-count', require('./components/projects/ProjectsCounter.vue').default);

Vue.component('jiries-list', require('./components/jiries/JiriesList.vue').default);
Vue.component('jiries-item', require('./components/jiries/JiriesItem.vue').default);
Vue.component('jiries-add-1', require('./components/jiries/JiriesAddForm1.vue').default);
Vue.component('jiries-add-2', require('./components/jiries/JiriesAddForm2.vue').default);
Vue.component('jiries-add-3', require('./components/jiries/JiriesAddForm3.vue').default);
Vue.component('jiries-add-4', require('./components/jiries/JiriesAddForm4.vue').default);
Vue.component('jiries-update', require('./components/jiries/JiriesModifyForm.vue').default);
Vue.component('jiries-delete', require('./components/jiries/JiriesDeleteForm.vue').default);
Vue.component('jiries-search', require('./components/jiries/JiriesSearchBar.vue').default);
Vue.component('jiries-count', require('./components/jiries/JiriesCounter.vue').default);
Vue.component('jiries-filtered', require('./components/jiries/JiriesFiltered.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    // render: h => h(App),
    router,
    store
});
