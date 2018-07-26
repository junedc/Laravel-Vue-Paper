import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import httpPlugin from 'plugins/http';
import Raphael from 'raphael/raphael'

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
Vue.prototype.$http = window.axios


// LightBootstrap plugin
import LightBootstrap from './light-bootstrap-main.js'

// router setup
import routes from './routes/routes.js'
// plugin setup
Vue.use(VueRouter)
Vue.use(LightBootstrap)
Vue.use(httpPlugin);




global.Raphael = Raphael


// configure router
const router = new VueRouter({
  mode: 'history',
  linkActiveClass: 'nav-item active',
  routes: routes
})



/* eslint-disable no-new */
new Vue({
  
  render: (h) => h(App),
  router
}).$mount('#app');
