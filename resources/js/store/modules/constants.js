import CONSTANTS_API  from '../../api/constants.js'

export const constants  = {
    namespaced: true,
    state: {
        currencies: '',
        units: '',
        deviceBrands: '',
        deviceProcessors: '',
        carBrands: '',
        colors: '',
        conditions: '',
        cities: '',
        countries: '',
        categories: '',

    },
    
    getters: {
        getCurrencies(state, getters) {
            return state.currencies
        },
        getUnits(state, getters) {
            return state.units
        },
        getDeviceBrands(state, getters) {
            return state.deviceBrands
        },
        getDeviceProcessors(state, getters) {
            return state.deviceProcessors
        },
        getCarBrands(state, getters) {
            return state.carBrands
        },
        getColors(state, getters) {
            return state.colors
        },
        getConditions(state, getters) {
            return state.conditions
        },
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
        SET_CURRENCIES(state, currencies) {
            state.currencies = currencies;
        },
        SET_UNITS(state, units) {
            state.units = units;
        },
        SET_DEVICE_BRANDS(state, deviceBrands) {
            state.deviceBrands = deviceBrands;
        },
        SET_DEVICE_PROCESSORS(state, deviceProcessors) {
            state.deviceProcessors = deviceProcessors;
        },
        SET_CAR_BRANDS(state, carBrands) {
            state.carBrands = carBrands;
        },
        SET_COLORS(state, colors) {
            state.colors = colors;
        },
        SET_CONDITIONS(state, conditions) {
            state.conditions = conditions;
        },
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
        fetchAll({commit}) {
            CONSTANTS_API.getAll()
            .then(response => {
                response = response.data
                commit('SET_CURRENCIES', response.currencies);
                commit('SET_UNITS', response.units);
                commit('SET_DEVICE_BRANDS', response.deviceBrands);
                commit('SET_DEVICE_PROCESSORS', response.deviceProcessors);
                commit('SET_CAR_BRANDS', response.carBrands);
                commit('SET_COLORS', response.colors);
                commit('SET_CONDITIONS', response.conditions);
                commit('SET_CITIES', response.cities);
                commit('SET_COUNTRIES', response.countries);
                // commit('SET_CATEGORIES', response.categories);
            })
        },
        fetchCurrencies({commit}) {
            CONSTANTS_API.getCurrencies()
            .then(response => {
                commit('SET_CURRENCIES', response.data)
            })
        },
        fetchUnits({commit}) {
            CONSTANTS_API.getUnits()
            .then(response => {
                commit('SET_UNITS', response.data)
            })
        },

        fetchDeviceBrands(){},
        fetchProcessorTypes(){},
        fetchCarBrands(){},
        fetchColors(){},

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
