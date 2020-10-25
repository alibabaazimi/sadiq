import { reject } from 'lodash'
import AdminAPI from '../../api/admin'

export const admin = {
    namespaced: true,
    state: { 
        dashboard: '',
        users: {},
        user: '',
        posts: {},
        post: {
            image: {}
        },
        categories: '',
        allCategories: '',
        category: '',
    },
    
    getters: {
        getDashboard(state) {
            return state.dashboard
        },
        getUsers(state) {
            return state.users
        },
        getUser(state) {
            return state.user
        },
        getPosts(state) {
            return state.posts
        },
        getPost(state) {
            return state.post
        },
        getCategories(state) {
            return state.categories
        },
        getAllCategories(state) {
            return state.allCategories
        },
        getCategory(state) {
            return state.category
        }
    },
    mutations: {
        SET_DASHBOARD(state, dashboard) {
            state.dashboard = dashboard
        },
        SET_USERS(state, users) {
            state.users = users
        },
        SET_USER(state, user) {
            state.user = user
        },
        SET_POSTS(state, posts) {
            state.posts = posts
        },
        SET_POST(state, post) {
            state.post = post
        },
        SET_CATEGORIES(state, categories) {
            state.categories = categories
        },
        SET_ALL_CATEGORIES(state, allCategories) {
            state.allCategories = allCategories
        },
        SET_CATEGORY(state, category) {
            state.category = category
        }
    },
    actions: {
        fetchDashboard({commit}) {
            AdminAPI.fetchDashboard()
            .then(response => {
                commit('SET_DASHBOARD', response.data)
            })
        },
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
        },
        fetchPosts({commit}) {
            AdminAPI.fetchPosts()
            .then(response => {
                commit('SET_POSTS', response.data)
            })
        },
        fetchPost({commit}, postId) {
            AdminAPI.fetchPost(postId)
            .then(response => {
                commit('SET_POST', response.data)
            }) 
        },
        deletePost({commit, dispatch}, postId) {
            return new Promise((resolve, reject) => {
                AdminAPI.deletePost(postId)
                .then(response => {
                    dispatch('fetchPosts');
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
            })
        },

        fetchCategories({commit} ) {
            AdminAPI.fetchCategories()
            .then(response => {
                commit('SET_CATEGORIES', response.data)
            }) 
        },
        fetchAllCategories({commit} ) {
            AdminAPI.fetchAllCategories()
            .then(response => {
                commit('SET_ALL_CATEGORIES', response.data)
            }) 
        },
        fetchCategory({commit}, categoryId) {
            AdminAPI.fetchCategory(categoryId)
            .then(response => {
                commit('SET_CATEGORY', response.data)
            }) 
        },
        storeCategory({commit, dispatch}, category) {
            return new Promise((resolve, reject) => {
                AdminAPI.storeCategory(category)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
            })
        },
        updateCategory({commit, dispatch}, category) {
            return new Promise((resolve, reject) => {
                AdminAPI.updateCategory(category)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
            })
        },
        deleteCategory({commit, dispatch}, category) {
            return new Promise((resolve, reject) => {
                AdminAPI.deleteCategory(category)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
            })
        }
    }
}