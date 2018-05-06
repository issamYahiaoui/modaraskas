
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


require('./ajax');
console.log('token', _token)
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/** import packages **/
import Vuetify from 'vuetify';
import * as VueGoogleMaps from 'vue2-google-maps'
import Popover from 'vue-js-popover';
import StarRating from 'vue-star-rating'
import Multiselect from 'vue-multiselect'
import VueSweetalert2 from 'vue-sweetalert2';
import Vuex from 'vuex';
import {store } from  './components/front/store' ;

Vue.component('search-filter', require('./components/front/SearchFilter.vue'));
Vue.component('student-search-filter', require('./components/front/parent/SearchFilter.vue'));
Vue.component('result-list', require('./components/front/resultList.vue'));
Vue.component('student-result-list', require('./components/front/parent/resultList.vue'));
Vue.component('location', require('./components/front/location.vue'));
Vue.component('preloader', require('./components/front/preloader.vue'));
Vue.component('result-card', require('./components/front/resultCard.vue'));
Vue.component('student-result-card', require('./components/front/parent/resultCard.vue'));
Vue.component('personal-info-card', require('./components/front/personalInfoCard.vue'));
Vue.component('educational-info-card', require('./components/front/educationalInfoCard.vue'));
Vue.component('location-card', require('./components/front/locationCard.vue'));
Vue.component('teaching-info', require('./components/front/TeachingInfo.vue'));
Vue.component('teaching-info2', require('./components/front/TeachingInfo2.vue'));
Vue.component('star-rating', StarRating);
Vue.component('multiselect', Multiselect)

Vue.prototype.__ = string => _.get(window.i18n, string)
Vue.use(Vuex);

Vue.use(VueSweetalert2);
Vue.use(Popover, { tooltip: true });
Vue.use(Vuetify);
Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyCis4vluMHt3WRX1tQlC4955sbgzNSbEnc',
        libraries: 'places', // This is required if you use the Autocomplete plugin
        language: 'en'
        // OR: libraries: 'places,drawing'
        // OR: libraries: 'places,drawing,visualization'
        // (as you require)
    }
});
const app = new Vue({
    el: '#app' ,
    store ,
});


