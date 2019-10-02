require('./bootstrap');

Vue.component('test', require('./components/interpolyaciya.vue').default);
const test = new Vue({
    el: '#app'
});


