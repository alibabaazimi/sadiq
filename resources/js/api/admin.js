
import { APP_CONFIG } from '../config.js'

export default {
    fetchDashboard: function() {
        return axios.get(APP_CONFIG.API_URL + '/admin/dashboard'); 
    },
    fetchUsers: function(page = 1) {
        return axios.get(APP_CONFIG.API_URL + '/admin/users?page=' + page); 
    },
    fetchUser: function(userId) {
        return axios.get(APP_CONFIG.API_URL + '/admin/users/' + userId); 
    },
    deleteUser: function(userId) {
        return axios.delete(APP_CONFIG.API_URL + '/admin/users/' + userId)
    },

    fetchPosts: function(page = 1) {
        return axios.get(APP_CONFIG.API_URL + '/admin/posts?page=' + page); 
    },
    fetchPost: function(postId) {
        return axios.get(APP_CONFIG.API_URL + '/admin/posts/' + postId); 
    },
    deletePost: function(postId) {
        return axios.delete(APP_CONFIG.API_URL + '/admin/posts/' + postId)
    },
    
    fetchCategories: function() {
        return axios.get(APP_CONFIG.API_URL + '/admin/categories/'); 
    },
    fetchAllCategories: function() {
        return axios.get(APP_CONFIG.API_URL + '/admin/all-categories/'); 
    },
    fetchCategory: function(categoryId) {
        return axios.get(APP_CONFIG.API_URL + '/admin/categories/' + categoryId); 
    },
    storeCategory: function(category) {
        return axios.put(APP_CONFIG.API_URL + '/admin/categories/', category)
    },
    updateCategory: function(category) {
        return axios.patch(APP_CONFIG.API_URL + '/admin/categories/', category)
    },
    deleteCategory: function(category) {
        return axios.delete(APP_CONFIG.API_URL + '/admin/categories/' + category.id)
    }

}
