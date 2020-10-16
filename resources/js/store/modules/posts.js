import { post } from 'jquery'
import auth from './auth'
import PostAPI from '../../api/post'

export const posts = {
    namespaced: true,
    state: {
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
        SET_POSTS(state, posts) {
            state.all = posts
        },
        SET_POST(state, post) {
            state.currentPost = post;
        },
        SET_POST_COMMENTS(state, comments) {
            // Vue.​Set(state.currentPost, 'comments', comments);
            state.currentPostComments = comments;
            console.log(comments)
            
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
            PostAPI.getPosts()
            .then(function(response) {
                commit('SET_POSTS', response.data)
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
        fetchPost({commit}, postId) {
            PostAPI.getPost(postId)
            .then(function(response) {
                commit('SET_POST', response.data);
            });
        },
        fetchPostComments({commit}, postId) {
            PostAPI.getPostComments(postId)
            .then(function(response) {
                commit('SET_POST_COMMENTS', response.data);
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
