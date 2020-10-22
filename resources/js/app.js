require('./bootstrap');

require('./top');
// require('./slider');
window.Vue = require('vue');

//Add select2
import 'select2/dist/js/select2.min.js';

//Add sweetalert2
import Swal from 'sweetalert2';
window.Swal = Swal;

//Star rating
import StarRating from 'vue-star-rating';
window.StarRating = StarRating;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('favorite', require('./components/Favorite.vue').default);

Vue.component('rating', require('./components/Rate.vue').default);

Vue.component('star-rating', StarRating);
//

const app = new Vue({
    el: '#app',

});
