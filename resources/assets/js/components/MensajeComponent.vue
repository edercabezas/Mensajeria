<template>

   <b-container fluid style="height: calc(100vh - 56px);">
     <b-row no-gutters>
       <b-col cols="4">           

         <contacto-form-component />
         <contacto-list-component />

        </b-col>
         <b-col cols="8">
          
            <activa-conversacion-component
              v-if="selectedConversacion"/>
         </b-col>
     </b-row>   
 </b-container>

</template>



<script type="text/javascript">

    export default {

          props: {
              user: Object
          },

           mounted() {

            this.$store.commit('setUser',this.user);
            this.$store.dispatch('getConversacion')
            .then(()=>{

              const conversacionId = this.$route.params.conversacionId;            
              if(conversacionId){
              const conversa = this.$store.getters.getConversacionById(conversacionId);
               this.$store.dispatch('getMensajes', conversa);
              }

            });

            Echo.private(`users.${this.user.id}`)
              .listen('mensajesenviados', (data) => {
             const mensaje = data.mensaje;
              mensaje.written_by_me = false;  
              this.addMessages(mensaje);
              });
            Echo.join('mensajes')
                .here((users) => {
                    users.forEach(user => this.changeStatus(user,true));
                }).joining(user => this.changeStatus(user,true)
                  ).leaving( user => this.changeStatus(user,false)
                );
        },

        methods: {
            changeStatus(user,status){
                  const index = this.$store.state.conversacion.findIndex( conversa => {
                      return conversa.contact_id == user.id;
                  });

                  if(index >= 0)
                 this.$set( this.$store.state.conversacion[index],'online',status);
              },
              
              addMessages(mensaje){
                this.$store.commit('addMessages', mensaje);

              }
           },

         computed: {
                selectedConversacion(){
                 return this.$store.state.selectedConversacion;
           }
       }
    }
</script>