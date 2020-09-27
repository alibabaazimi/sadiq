
import { APP_CONFIG } from '../config.js'

export default {
    getToken: function(credentials) {
        return axios.post(APP_CONFIG.API_URL + '/login', credentials)
    },
    getCurrentUser: function(token) {
        return axios.get(APP_CONFIG.API_URL + '/currentUser', {
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
