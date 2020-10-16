require('./bootstrap');
import Vuex from 'vuex'
import VuePortal from 'portal-vue'
import IonRangeSlider from 'ion-rangeslider'
import 'ion-rangeslider/css/ion.rangeSlider.min.css'
import 'icheck-bootstrap/icheck-bootstrap.min.css'
import { latLng } from "leaflet";
import { LMap, LTileLayer, LMarker } from 'vue2-leaflet';
import 'leaflet/dist/leaflet.css';
import moment from 'moment'
import pagination from 'laravel-vue-pagination'
import VueNestedMenu from 'vue-nested-menu';
import VueTelInput from 'vue-tel-input'

Vue.use(VueNestedMenu);

Vue.component('l-map', LMap);
Vue.component('l-tile-layer', LTileLayer);
Vue.component('l-marker', LMarker);

// var pathToRegexp = require('path-to-regexp');

window.Vue = require('vue');
Vue.use(Vuex);
Vue.use(VuePortal);
Vue.use(IonRangeSlider)
Vue.use(VueTelInput, [])
Vue.prototype.moment = moment
Vue.component('pagination', require('laravel-vue-pagination'));

// Vue.use(select2);
// Vue.use(Swal);

import Vue      from 'vue';
import router   from './routes.js'
import store    from './store'

import MainLayout from './layouts/MainLayout';

let token = localStorage.getItem('access_token') || null;

if (token) {
    axios.defaults.headers.common = {
        'Authorization':  'Bearer ' + token
    }
}


new Vue({
    components: {
        MainLayout,
    },
    mounted() {
        
    },
    router,
    store
}).$mount('#app');
