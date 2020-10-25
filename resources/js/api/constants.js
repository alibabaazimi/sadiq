import { APP_CONFIG } from '../config'

export default {
    getAll: function() {
        return axios.get(APP_CONFIG.API_URL + '/constants')
    },
    getCategories: function() {
        return axios.get(APP_CONFIG.API_URL + '/categories');
    },
    getCountries: function() {
        return axios.get(APP_CONFIG.API_URL + '/countries')
    },
    getCities: function() {
        return axios.get(APP_CONFIG.API_URL + '/cities');
    }
}