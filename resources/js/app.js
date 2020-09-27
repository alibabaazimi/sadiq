require('./bootstrap');
import Vuex from 'vuex'
// var pathToRegexp = require('path-to-regexp');

window.Vue = require('vue');
Vue.use(Vuex);

import Swal from 'sweetalert2/dist/sweetalert2.js'

import 'sweetalert2/src/sweetalert2.scss'

import Vue      from 'vue';
import router   from './routes.js'
import store    from './store'
import TheNavigation from './components/layouts/TheNavigation.vue';
import TheFooter from './components/layouts/TheFooter.vue'


new Vue({
    // Waiting for the callback.blade.php message... (token and username).
    mounted () {
        window.addEventListener('message', this.message, false);
        // alert();
    },

    beforeDestroy () {
        // window.removeEventListener('message', this.onMessage);
    },
    data: {
        catBoxShow: false,
        message: {},
    },
    methods: {
        toggleCatBox() {
            if (this.catBoxShow == false) {
                this.catBoxShow = true;
            }
            else {
                this.catBoxShow = false;
            }
        }
    },
    components: {
        TheNavigation,
        TheFooter
    },
    router,
    store
}).$mount('#app');
