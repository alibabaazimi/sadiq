import { post } from 'jquery'
import auth from './auth'
import PostAPI from '../../api/post'
import { reject } from 'lodash'

export const posts = {
    namespaced: true,
    state: {
        allLoadingStatus: 1,
        currentPostLoadingStatus: 1,
        currentPost: {
            amount: '',
            category_id: '',
            created_at: '',
            desc: '',
            id: '',
            image: '',
            likes: '',
            posted_by: '',
            price: '',
            title: '',
            unit_id: '',
            updated_at: '',
            user: '',
            color: [],
            device_brand: []
        },
        currentPostComments: '',
        all: [],
        postsByMe: []
    },
    getters: {
        allLoadingStatus(state) {
            return state.allLoadingStatus
        },
        currentPostLoadingStatus(state) {
            return state.currentPostLoadingStatus
        },
        all(state) {
            return state.all
        },
        currentPost(state) {
            return state.currentPost
        },
        postImage(state, getters) {
            return '/'+getters.currentPost.image['path']
        },
        getPostComments(state, getters) {
            return state.currentPostComments;
        },
        postsByMe(state, getters) {
            return state.postsByMe;
        },
        postsByUser(state, getters) {
            return state.byUser;
        }
    },
    mutations: {
        SET_ALL_LOADING_STATUS(state, status) {
            state.allLoadingStatus = status;
        },
        SET_CURRENT_POST_LOADING_STATUS(state, status) {
            state.currentPostLoadingStatus = status
        },
        SET_POSTS(state, posts) {
            state.all = posts
        },
        SET_POST(state, post) {
            state.currentPost = post;
        },
        SET_POST_COMMENTS(state, comments) {
            // Vue.​Set(state.currentPost, 'comments', comments);
            state.currentPostComments = comments;
            
        },
        SET_POSTS_BY_ME(state, posts) {
            state.postsByMe = posts;
        },
        SET_POSTS_BY_USER(state, posts) {
            state.byUser = posts;
        }
    },
    actions: {
        fetchPosts({commit}) {
            return new Promise((resolve, reject) => {
                PostAPI.getPosts()
                .then(function(response) {
                    commit('SET_POSTS', response.data);
                    commit('SET_ALL_LOADING_STATUS', 2);
                    resolve(response);
                })
                .catch(error => {
                    commit('SET_ALL_LOADING_STATUS', 3);
                    reject(error)
                })
            })
        },
        fetchPostsByMe({commit}) {
            PostAPI.getPostsByMe()
            .then(function(response) {
                commit('SET_POSTS_BY_ME', response.data)
            })
        },
        fetchPostsByUser({commit}, userId) {
            PostAPI.getPostsByUser(this.state.auth.user.id)
            .then(function(response) {
                commit('SET_POSTS_BY_USER', response.data)
            })
        },
        fetchPost({commit}, slug) {
            return new Promise((resolve,reject) => {
                PostAPI.getPost(slug)
                .then(function(response) {
                    commit('SET_POST', response.data);
                    commit('SET_CURRENT_POST_LOADING_STATUS', 2);
                    resolve(response)
                })
                .catch(error => {
                    commit('SET_CURRENT_POST_LOADING_STATUS', 3);
                    reject(error);
                })
            })
        },
        submitPost({commit, dispatch}, post) {
            return new Promise((resolve, reject) => {
                PostAPI.submitPost(post)
                .then( (response) => {
                    console.log('Response'+ response)
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                });
            })

        },
        fetchPostComments({commit}, slug) {
            return new Promise((resolve, reject) => {
                PostAPI.getPostComments(slug)
                .then(function(response) {
                    commit('SET_POST_COMMENTS', response.data);
                    resolve(response)
                })
                .catch(error => {
                    reject(response);
                })
            })
        },
        submitComment({commit, dispatch}, comment) {
            PostAPI.submitComment(comment)
            .then(function(response) {
                dispatch('fetchPostComments', comment.post_id);
            });
        }
    }
}
