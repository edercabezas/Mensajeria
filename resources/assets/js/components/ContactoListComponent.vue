<template>

     <b-list-group>

                <contacto-component 
                v-for="conversa in conversacionFiltered"
                :key ="conversa.id"
                :conversa="conversa"
                :selected="isSelected(conversa)"
                @click.native="selectConversacion(conversa)">
             </contacto-component>
    </b-list-group>

</template>


<script>
    
    export default {

       
        methods: {
             selectConversacion(conversa){
              
                this.$router.push( `/chat/${conversa.id}`, () => {
                       this.$store.dispatch('getMensajes', conversa);
                }); 
               
             
            },
             isSelected(conversa){
                if(this.selectedConversacion)
                   return  this.selectedConversacion.id === conversa.id;

                return false;
            }
        },
        
        computed: {
            selectedConversacion(){
                return this.$store.state.selectedConversacion;
            },
            conversacionFiltered(){
                return this.$store.getters.conversacionFiltered;
            }
        }
           
    }

</script>