import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);
//axios.defaults.baseURL = 'http://jiri.test/api'

import state from './state.js';
import actions from './actions.js';
import mutations from './mutations.js';
import getters from './getters.js';

let store = new Vuex.Store({
    state: state,
    mutations: mutations,
    getters: getters,
    actions: actions,
});

global.store = store;

export default store;