//
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.VueRouter = require('vue-router').default;

window.VueAxios = require('vue-axios').default;

window.Axios = require('axios').default;

let AppLayout = require('./components/App.vue');

const Listposts = Vue.component('Listposts', require('./components/Listposts.vue'));
const Addpost = Vue.component('Addpost', require('./components/Addpost.vue'));
const Editpost = Vue.component('Editpost', require('./components/Editpost.vue'));
const Deletepost = Vue.component('Deletepost', require('./components/Deletepost.vue'));
const Viewpost = Vue.component('Viewpost', require('./components/Viewpost.vue'));

// Vue.component('example', require('./components/Example.vue'));


// registering Modules
Vue.use(VueRouter,VueAxios, axios);

const routes = [
    {
        name: 'Listposts',
        path: '/',
        component: Listposts
    },
    {
        name: 'Addpost',
        path: '/add-post',
        component: Addpost
    }
    ,
    {
        name: 'Editpost',
        path: '/post-edit',
        component: Editpost
    }
    ,
    {
        name: 'Deletepost',
        path: '/post-delete',
        component: Deletepost
    },
    {
        name: 'Viewpost',
        path: '/post-view',
        component: Viewpost
    }
];


const router = new VueRouter({ mode: 'history', routes: routes});

new Vue(
    Vue.util.extend(
        { router },
        AppLayout
    )
).$mount('#app');


Vue.component('example', require('./components/Example.vue'));
// Vue.component('tasks', require('./components/Task.vue'));
//
//
var watchExampleVM = new Vue({
    el: '#watch-example',
    data: {
        question: '',
        answer: 'Пока вы не зададите вопрос, я не могу ответить!'
    },
    watch: {
        // эта функция запускается при любом изменении вопроса
        question: function (newQuestion, oldQuestion) {
            this.answer = 'Ожидаю, когда вы закончите печатать...'
            this.getAnswer()
        }
    },
    methods: {
        // _.debounce — это функция из lodash, позволяющая ограничить
        // то, насколько часто может выполняться определённая операция.
        // В данном случае, мы хотим ограничить частоту обращений к yesno.wtf/api,
        // дожидаясь завершения печати вопроса перед тем как послать ajax-запрос.
        // Чтобы узнать больше о функции _.debounce (и её родственнице _.throttle),
        // см. документацию: https://lodash.com/docs#debounce
        getAnswer: _.debounce(
            function () {
                if (this.question.indexOf('?') === -1) {
                    this.answer = 'Вопросы обычно заканчиваются вопросительным знаком. ;-)'
                    return
                }
                this.answer = 'Думаю...'
                var vm = this
                axios.get('https://yesno.wtf/api')
                    .then(function (response) {
                        vm.answer = _.capitalize(response.data.answer)
                    })
                    .catch(function (error) {
                        vm.answer = 'Ошибка! Не могу связаться с API. ' + error
                    })
            },
            // Это число миллисекунд, которое мы ждём, после того как пользователь прекратил печатать.
            500
        )
    }
})