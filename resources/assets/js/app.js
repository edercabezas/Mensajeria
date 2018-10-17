import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

require('./bootstrap');


import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import store from './store'

import VueRouter from 'vue-router'

import MensajeComponent from './components/MensajeComponent.vue'
import ExampleComponent from './components/ExampleComponent.vue'

Vue.use(BootstrapVue);
Vue.use(VueRouter);



Vue.component('contacto-component', 
	require('./components/ContactoComponent.vue'));


Vue.component('contacto-form-component', 
  require('./components/ContaFormComponet.vue'));


Vue.component('perfil-component', 
	require('./components/PerfilComponent.vue'));

Vue.component('estatus-component', 
	require('./components/EstatusComponent.vue'));


Vue.component('contacto-list-component', 
	require('./components/ContactoListComponent.vue'));

Vue.component('activa-conversacion-component',
 require('./components/ActivaConversacionComponent.vue'));

Vue.component('mensaje-conversacion-component',
 require('./components/MensajesConversacionesCompo.vue'));
/*
Vue.component('mensaje-component',
 require('./components/MensajeComponent.vue'));
*/

//https://router.vuejs.org/guide/#javascript
//npm i vue-router --save
const routes = [
  { path: '/chat', component: MensajeComponent },
  { path: '/chat/:conversacionId', component: MensajeComponent },
  { path: '/example', component: ExampleComponent }
]
const router = new VueRouter({
  routes,
  mode: 'history'
})


const app = new Vue({
    el: '#app',
    store,
    router,
    methods:{
    	logout(){
    		 document.getElementById('logout-form').submit();
    	}
    }
});
