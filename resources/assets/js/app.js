import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

Vue.component('contacto-component', 
	require('./components/ContactoComponent.vue'));

Vue.component('contacto-list-component', 
	require('./components/ContactoListComponent.vue'));

Vue.component('activa-conversacion-component',
 require('./components/ActivaConversacionComponent.vue'));

Vue.component('mensaje-conversacion-component',
 require('./components/MensajesConversacionesCompo.vue'));


const app = new Vue({
    el: '#app',
    methods:{
    	logout(){
    		 document.getElementById('logout-form').submit();
    	}
    }
});
