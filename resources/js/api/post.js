
import { APP_CONFIG } from '../config.js'

export default {
    getPosts: function() {
        return axios.get(APP_CONFIG.API_URL + '/posts')
    },
    getPostsByMe: function() {
        return axios.get(APP_CONFIG.API_URL + '/auth/user/posts');
    },
    getPostsByUser: function(userId) {
        return axios.get(APP_CONFIG.API_URL + '/user/'+ userId +'/posts');
    },
    getPost: function (slug) {
        return axios.get(APP_CONFIG.API_URL + '/posts/' + slug);
    },
    submitPost: function (post) {
        let config = {
            header : {
                "Content-Type": "multipart/form-data"
            }
        }
        console.log(post)
        return axios.post(APP_CONFIG.API_URL + '/posts/', post, config);
    },
    getPostComments: function (slug) {
        return axios.get(APP_CONFIG.API_URL + '/posts/' + slug + '/comments')
    },
    submitComment: function (comment) {
        return axios.post(APP_CONFIG.API_URL + '/posts/' + comment.postId + '/comments', comment);
    }
}
