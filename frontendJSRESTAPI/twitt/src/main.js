import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import '@/assets/bootstrap.min.css'
import '@/assets/bootstrap.bundle.min.js'
import 'material-icons/css/material-icons.css'
import 'material-icons/iconfont/material-icons.css'

createApp(App).use(store).use(router).mount('#app')
//Object.defineProperty(Vue.prototype, '$moment', {value: moment})