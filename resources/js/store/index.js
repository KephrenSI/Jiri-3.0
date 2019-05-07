import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

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