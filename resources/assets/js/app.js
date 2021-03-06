/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('signatures', require('./components/Signatures.vue'));
Vue.component('signature-form', require('./components/SignatureForm.vue'));
Vue.component('paginate', require('vuejs-paginate'));

const app = new Vue({
    el: '#app'
});
// window.VueRouter = require('vue-router').default;
//
// window.VueAxios = require('vue-axios').default;
//
// window.Axios = require('axios').default;
//
// let AppLayout = require('./components/App.vue');
//
// const Listposts = Vue.component('Listposts', require('./components/Listposts.vue'));
// const Addpost = Vue.component('Addpost', require('./components/Addpost.vue'));
// const Editpost = Vue.component('Editpost', require('./components/Editpost.vue'));
// const Deletepost = Vue.component('Deletepost', require('./components/Deletepost.vue'));
// const Viewpost = Vue.component('Viewpost', require('./components/Viewpost.vue'));
//
// // Vue.component('example', require('./components/Example.vue'));
//
//
// // registering Modules
// Vue.use(VueRouter,VueAxios, axios);
//
// const routes = [
//     {
//         name: 'Listposts',
//         path: '/',
//         component: Listposts
//     },
//     {
//         name: 'Addpost',
//         path: '/add-post',
//         component: Addpost
//     }
//     ,
//     {
//         name: 'Editpost',
//         path: '/post-edit',
//         component: Editpost
//     }
//     ,
//     {
//         name: 'Deletepost',
//         path: '/post-delete',
//         component: Deletepost
//     },
//     {
//         name: 'Viewpost',
//         path: '/post-view',
//         component: Viewpost
//     }
// ];
//
//
// const router = new VueRouter({ mode: 'history', routes: routes});
//
// new Vue(
//     Vue.util.extend(
//         { router },
//         AppLayout
//     )
// ).$mount('#app');
//
