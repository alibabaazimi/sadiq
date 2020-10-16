
import { APP_CONFIG } from '../config.js'

export default {
    registerUser: function(credentials) {
        return axios.post(APP_CONFIG.API_URL + '/register', credentials);
    },
    loginUser: function(credentials) {
        return axios.post(APP_CONFIG.API_URL + '/login', credentials);
    },
    
    getUser: function(token) {
        return axios.get(APP_CONFIG.API_URL + '/auth/user', {
            headers: {
                'Authorization' : 'Bearer ' + token
            }
        })
    },
    setAxiosHeader: function(token) {
        axios.defaults.headers.common = {
            'Authorization':  'Bearer ' + token
        }
    },
    removeAxiosHeader: function() {
        axios.defaults.headers.common = {
            'Authorization':  ''
        }
    }
}
