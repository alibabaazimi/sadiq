
import { APP_CONFIG } from '../config.js'

export default {
    getPosts: function() {
        return axios.get(APP_CONFIG.API_URL + '/posts')
    },
    getPostsByUser: function(userId) {
        return axios.get(APP_CONFIG.API_URL + '/user/'+ userId +'/posts');
    },
    getPost: function (postId) {
        return axios.get(APP_CONFIG.API_URL + '/posts/' + postId);
    },
    getPostComments: function (postId) {
        return axios.get(APP_CONFIG.API_URL + '/posts/' + postId + '/comments')
    },
    submitComment: function (comment) {
        return axios.post(APP_CONFIG.API_URL + '/posts/' + comment.postId + '/comments', comment);
    }
}
