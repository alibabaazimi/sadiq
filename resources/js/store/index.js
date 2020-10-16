require('es6-promise').polyfill();

import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

import { constants } from './modules/constants'
import { auth } from './modules/auth'
import { posts } from './modules/posts'
import { admin } from './modules/admin'

export default new Vuex.Store({
    modules: {
        auth,
        constants,
        posts,
        admin
    },
    state: {
        cookiesAccepted: localStorage.getItem('cookiesAccepted') || false,
    },
    getters: {
        cookiesAccepted(state) {
            return state.cookiesAccepted;
        }
    },
    mutations: {
        SET_COOKIES_ACCEPTED(state) {
            localStorage.setItem('cookiesAccepted', true)
            state.cookiesAccepted = true
        }
    },
})
