import { APP_CONFIG } from '../config.js'

export default {
    getCategories: function() {
        return axios.get(APP_CONFIG.API_URL + '/categories');
    }
}