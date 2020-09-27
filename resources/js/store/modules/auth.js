import UserAPI from '../../api/user'

export const auth = {
    namespaced: true,
    state: {
        user: {
            id: null,
            name: null,
            email: null,
            image: null,
        },
        token: localStorage.getItem('access_token') || null,
    },
    getters: {
        loggedIn(state) {
            return state.token != null
        },
        user(state, getters) {
            return state.user
        },
    },
    mutations: {
        SET_USER(state, user) {
            state.user.id = user.id;
            state.user.name = user.name;
            state.user.email = user.email;
            state.user.image = user.avatar;
        },
        SET_TOKEN(state, token) {
            localStorage.setItem('access_token', token);
            state.token = token;
        },
        DESTROY_TOKEN(state, token) {
            localStorage.removeItem('access_token');
            state.token = null;
        }
    },
    actions: {
        getCurrentUser({commit}, token) {
            UserAPI.getCurrentUser(token)
                .then(res => {
                    const user = res.data.user;
                    commit('SET_TOKEN', token);
                    commit('SET_USER', user);
                })

        },
        login({commit}, token) {
            UserAPI.setAxiosHeader(token);
        },
        newToken({commit, dispatch}, credentials) {
            return new Promise((resolve, reject) => {
                UserAPI.getToken(credentials)
                    .then(response => {
                        const token = response.data.access_token;
                        commit('SET_TOKEN', token)
                        dispatch('getCurrentUser', token)
                        dispatch('login', token);
                        resolve(response);
                        
                    })
                    .catch(err => {
                        reject(err);
                    })
            })
        },
        destroyToken({commit}, credentials) {
            localStorage.removeItem('access_token');
            commit('DESTROY_TOKEN');
        }
    }
}
