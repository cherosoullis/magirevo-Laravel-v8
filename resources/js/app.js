require('./bootstrap');

require('./top');
// require('./slider');
window.Vue = require('vue');

//Add select2
import 'select2/dist/js/select2.min.js';


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('favorite', require('./components/Favorite.vue').default);

const app = new Vue({
    el: '#app',
});
