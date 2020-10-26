require('./bootstrap');
import Vue from 'vue';
import Router from './Router.js';
import Layout from './layout/layout.vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)

const app = new Vue({
    el: '#main',
    vuetify: new Vuetify({}),
    router: Router,
    components: { Layout }
})
export default new Vuetify(app)