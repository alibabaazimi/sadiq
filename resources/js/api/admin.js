
import { APP_CONFIG } from '../config.js'

export default {
    fetchUsers: function(page) {
        return axios.get(APP_CONFIG.API_URL + '/admin/users?page=' + page); 
    },
    fetchUser: function(userId) {
        return axios.get(APP_CONFIG.API_URL + '/admin/users/' + userId); 
    },
    
    deleteUser: function(userId) {
        return axios.delete(APP_CONFIG.API_URL + '/admin/users/' + userId)
    }

}
