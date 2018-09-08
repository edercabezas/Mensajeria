<template>
	 <div >
	 	 <b-form class=" my-3 mx-3">
            <b-form-input  type="text" class="text-center"
                placeholder="Buscar contacto.....">
            </b-form-input>
       </b-form>
	 <b-list-group>

                <contacto-component 
                v-for="conversa in conversacion"
                :key ="conversa.id"
                :conversa="conversa"
                @click.native="selectConversacion(conversa)">
             </contacto-component>

	       <!--  <contacto-component variant="dark">
             </contacto-component>
             <contacto-component variant="">
             </contacto-component>
             <contacto-component variant="secondary">
             </contacto-component> -->
	</b-list-group>
	 </div>
</template>


<script>
    export default {
       
        data(){

            return{
                conversacion: []
            };
        },
        mounted() {
           this.getConversacion();
        },
        methods: {
            getConversacion(){
                axios.get('/api/conversacion')
                .then((response) => {
                    this.conversacion = response.data;
                });
            },
            selectConversacion(conversa){
                console.log(conversa);
            }
        }
    }
</script>
