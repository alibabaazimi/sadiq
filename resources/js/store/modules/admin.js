import { reject } from 'lodash'
import AdminAPI from '../../api/admin'

export const admin = {
    namespaced: true,
    state: { 
            users: {},
            user: {},
        },
    
    getters: {
        getUsers(state) {
            return state.users
        },
        getUser(state) {
            return state.user
        }
    },
    mutations: {
        SET_USERS(state, users) {
            state.users = users
        },
        SET_USER(state, user) {
            state.user = user
        }
    },
    actions: {
        fetchUsers({commit}, userId) {
            AdminAPI.fetchUsers(userId)
            .then(response => {
                commit('SET_USERS', response.data)
            })
        },
        fetchUser({commit}, userId) {
            AdminAPI.fetchUser(userId)
            .then(response => {
                commit('SET_USER', response.data)
            }) 
        },
        deleteUser({commit, dispatch}, userId) {
            return new Promise((resolve, reject) => {
                AdminAPI.deleteUser(userId)
                .then(response => {
                    dispatch('fetchUsers');
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
            })
        }
    }
}