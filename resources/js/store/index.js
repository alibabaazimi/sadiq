require('es6-promise').polyfill();

import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

import { auth } from './modules/auth'
import { posts } from './modules/posts'

export default new Vuex.Store({
    modules: {
        auth,
        posts
    },
})
