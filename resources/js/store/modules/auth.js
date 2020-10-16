import AuthAPI from '../../api/auth'

export const auth = {
    namespaced: true,
    state: {
        loggingState: 0,
        user: {
            id: null,
            name: null,
            email: null,
            profileImage: null,
        },
        token: localStorage.getItem('access_token') || null,
    },
    getters: {
        check(state) {
            if (state.loggingState = 2) {
                return state.token != null
            } else {
                return false;
            }
        },
        user(state, getters) {
            return state.user
        },
    },
    mutations: {
        SET_USER(state, user) {
            state.user = user;
            state.loggingState = 2;
        },
        SET_TOKEN(state, token) {
            localStorage.setItem('access_token', token);
            state.token = token;
            state.loggingState = 1;
        },
        DESTROY_TOKEN(state, token) {
            localStorage.removeItem('access_token');
            state.token = null;
        }
    },
    actions: {
        login({commit, dispatch}, credentials) {
            return new Promise((resolve, reject) => {
            AuthAPI.loginUser(credentials)
                .then(response => {
                    commit('SET_TOKEN', response.data.access_token);
                    dispatch('getUser', response.data.access_token);
                    dispatch('setHeader', response.data.access_token);
                    resolve(response)
                })
                .catch(error => {
                    reject(error);
                })
            })
        },
        loginWithToken({commit, dispatch}, token) {
            return new Promise((resolve, reject) => {
                dispatch('getUser', token)

                commit('SET_TOKEN', token);
                dispatch('setHeader', token);

            })
        },
        register({commit, dispatch}, credentials) {
            AuthAPI.registerUser(credentials)
                .then(response => {
                    commit('SET_TOKEN', response.data.access_token);
                    dispatch('getUser', response.data.access_token)
                    commit('SET_USER', response.data.user);
                    dispatch('setHeader', response.data.access_token);
                })
        },
        getUser({commit, dispatch}, token) {
            return new Promise((resolve, reject) => {
                AuthAPI.getUser(token)
                    .then(response => {
                        const user = response.data.user;
                        commit('SET_USER', user);
                        dispatch('setHeader', token);
                        resolve(response)
                    })
                    .catch(error => {
                        reject(error)
                    })
            })
        },
        setHeader({commit}, token) {
            AuthAPI.setAxiosHeader(token);
        },

        // newToken({commit, dispatch}, credentials) {
        //     return new Promise((resolve, reject) => {
        //         AuthAPI.getToken(credentials)
        //             .then(response => {
        //                 const token = response.data.access_token;
        //                 commit('SET_TOKEN', token)
        //                 dispatch('getUser', token)
        //                 dispatch('login', token);
        //                 resolve(response);
        //             })
        //             .catch(err => {
        //                 reject(err);
        //             })
        //     })
        // },
        destroyToken({commit}, credentials) {
            localStorage.removeItem('access_token');
            commit('DESTROY_TOKEN');
        }
    }
}
