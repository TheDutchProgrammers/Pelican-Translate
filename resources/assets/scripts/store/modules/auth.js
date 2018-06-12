import User from './../../models/user';
const route = require('./../../../../../vendor/tightenco/ziggy/src/js/route').default;

export default {
    namespaced: true,
    state: {
        user: User.fromToken(),
    },
    getters: {
        /**
         * Return the currently authenticated user.
         *
         * @param state
         * @returns {User|null}
         */
        getUser: function (state) {
            return state.user;
        },
    },
    setters: {},
    actions: {
        /**
         * Log a user into the Panel.
         *
         * @param commit
         * @param {String} user
         * @param {String} password
         * @returns {Promise<any>}
         */
        login: ({commit}, {user, password}) => {
            return new Promise((resolve, reject) => {
                window.axios.post(route('auth.login'), {user, password})
                    .then(response => {
                        commit('logout');

                        // If there is a 302 redirect or some other odd behavior (basically, response that isnt
                        // in JSON format) throw an error and don't try to continue with the login.
                        if (!(response.data instanceof Object)) {
                            return reject(new Error('An error was encountered while processing this request.'));
                        }

                        if (response.data.complete) {
                            commit('login', {jwt: response.data.jwt});
                            return resolve({
                                complete: true,
                                intended: response.data.intended,
                            });
                        }

                        return resolve({
                            complete: false,
                            token: response.data.login_token,
                        });
                    })
                    .catch(reject);
            });
        },

        /**
         * Log a user out of the Panel.
         *
         * @param commit
         * @returns {Promise<any>}
         */
        logout: function ({commit}) {
            return new Promise((resolve, reject) => {
                window.axios.get(route('auth.logout'))
                    .then(() => {
                        commit('logout');
                        return resolve();
                    })
                    .catch(reject);
            })
        },

        /**
         * Update a user's email address on the Panel and store the updated result in Vuex.
         *
         * @param commit
         * @param {String} email
         * @param {String} password
         * @param {String} confirm
         * @return {Promise<any>}
         */
        updateEmail: function ({commit}, {email, password, confirm}) {
            return new Promise((resolve, reject) => {
                window.axios.put(route('api.client.account.update-email'), {
                    email, password, password_confirmation: confirm
                })
                    .then(response => {
                        // If there is a 302 redirect or some other odd behavior (basically, response that isnt
                        // in JSON format) throw an error and don't try to continue with the login.
                        if (!(response.data instanceof Object)) {
                            return reject(new Error('An error was encountered while processing this request.'));
                        }

                        commit('setEmail', response.data.email);
                        return resolve();
                    })
                    .catch(reject);
            });
        },
    },
    mutations: {
        setEmail: function (state, email) {
            state.user.email = email;
        },
        login: function (state, {jwt}) {
            localStorage.setItem('token', jwt);
            state.user = User.fromToken(jwt);
        },
        logout: function (state) {
            localStorage.removeItem('token');
            state.user = null;
        },
    },
};
