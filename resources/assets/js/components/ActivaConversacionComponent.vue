	<template>
		
	  <b-row>
	<b-col cols="8">
	 <b-card no-body
          footer-bg-variant="light"
          footer-border-variant="dark"
          class="h-100">
					
					<b-card-body class="card-body-scroll">	
							<mensaje-conversacion-component 
					    	v-for="message in messages"
					    	:key="message.id"
					    	:written-by-me="message.written_by_me"
					    	:image="message.written_by_me ? myImage : selectedConversacion.contact_image">
					    	
					    	{{ message.contecnt }}
			    	</mensaje-conversacion-component>
					</b-card-body>

	    		<div id="mensaje-contenedor">
			    

	    		</div>
		    <div slot="footer">
				   <b-form class="mb-0" @submit.prevent="postMessage" autocomplete="off">
				   	   <b-input-group>
			            <b-form-input  type="text" class="text-center" v-model="newMensaje"
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
			
				<b-img :src="selectedConversacion.contact_image" rounded="circle" width="60" height="60" class="m-1" />
			<p> {{ selectedConversacion.contact_name }}</p>
			<hr>
				<b-form-checkbox>
				Desactivar notificaciones
				</b-form-checkbox>
		   </b-col>
	  </b-row>
	</template>

	<style type="text/css">
		.card-body-scroll{

			max-height: calc(100vh -63px);
			overflow-y: auto;
		}

	</style>

<script>
    export default {
      
        data(){
            return{
            	
            	newMensaje: ''
             };
        },
        methods: {
        	postMessage(){
	        		this.$store.dispatch('postMessage', this.newMensaje).then(() => {

	        			this.newMensaje =  '';
	        		});
        	},
        	scrollToBotom(){
        		const el = document.querySelector('.card-body-scroll');
        		el.scrollTop = el.scrollHeight;
        	}
        },
        computed: {

        		myImage(){
        			return `/users/${this.$store.state.user.image}`;
        		
        		},
        		selectedConversacion(){
        			return this.$store.state.selectedConversacion;

        		},
        			messages(){
        			return this.$store.state.messages;
        		}
        },
      	updated(){
      		this.scrollToBotom();
        	}
    }

</script>