import CONSTANTS_API  from '../../api/constants.js'

export const constants  = {
    namespaced: true,
    state: {
        cities: '',
        countries: '',
        categories: '',
    },
    getters: {
        getCities(state, getters) {
            return state.cities
        },
        getCountries(state) {
            return state.countries;
        },
        getCategories(state) {
            return state.categories;
        }
    },
    mutations: {
        SET_CITIES(state, cities) {
            state.cities = cities;
        },
        SET_COUNTRIES(state, countries) {
            state.countries = countries
        },
        SET_CATEGORIES(state, categories) {
            state.categories = categories
        }
    },
    actions: {
        fetchCities({commit}) {
            CONSTANTS_API.getCities()
            .then(response => {
                commit('SET_CITIES', response.data)
            })
        },
        fetchCountries({commit}) {
            return new Promise((resolve, reject) => {
                CONSTANTS_API.getCountries()
                .then(response => {
                    commit('SET_COUNTRIES', response.data)
                    resolve(response);
                })
                .catch(error => {
                    reject(error)
                })
            })
        },
        fetchCategories({commit}) {
            return new Promise((resolve, reject) => {
                CONSTANTS_API.getCategories()
                .then(response => {
                    commit('SET_CATEGORIES', response.data)
                    resolve(response);
                })
                .catch(error => {
                    reject(error)
                })
            })
        }
    }
}
