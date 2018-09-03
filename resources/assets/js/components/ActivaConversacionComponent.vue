	<template>
		
	  <b-row>
	<b-col cols="8">
	 <b-card 
          footer-bg-variant="light"
          footer-border-variant="dark"
          title="Conversacion Activa"
          class="h-100">

	    	<mensaje-conversacion-component 
	    	v-for="message in messages"
	    	:key="message.id"
	    	:written-by-me="message.written_by_me">
	    		{{ message.contecnt }}
	    	</mensaje-conversacion-component>

		    <div slot="footer">
				   <b-form class="mb-0" @submit.prevent="postMenssge" autocomplete="off">
				   	   <b-input-group>
			            <b-form-input  type="text" class="text-center" v-model="newmensaje"
			                placeholder="Buscar contacto.....">
			            </b-form-input>

				    <b-input-group-append>
				      <b-button variant="primary" type="submit">Enviar</b-button>
				    </b-input-group-append>
				  </b-input-group>
	       </b-form>
	    </div>
	   </b-card>

	</b-col>
			<b-col cols="4">            
			
				<b-img rounded="circle"blank width="60" height="60" blank-color="#777" alt="img" 
				class="m-1" />
			<p> Usuario selecionado</p>
			<hr>
				<b-form-checkbox>
				Desactivar notificaciones
				</b-form-checkbox>
		   </b-col>
	  </b-row>
	</template>

<script>
    export default {
       
        data(){
            return{
            	messages: [],
            	newmensaje: ''
            };
        },
        mounted() {
 			this.getMensajes();
        },
        methods: {
        	getMensajes(){

        		axios.get('/api/mensajes')
	            .then((response) => {
	            	console.log(response.data);
	            	this.messages = response.data;
	            });
        	},
        	
        	postMenssge(){
        		const params ={
        			to_id: 2,
        			cont: this.newmensaje
        		};

        		axios.post('/api/mensajes', params)
	            .then((response) => {
	            //	console.log(response.data);
	            	this.newmensaje = '';
	            	this.getMensajes();

	            });

        	}
        }
    }
</script>
