<template>
      <b-list-group-item :variant="variant">
              
                <b-row class="p-2" align-h="center">
                            
                <b-col cols="12" md="3"  class="text-center">
                    <b-img :src="conversa.contact_image" rounded="circle"  width="48" height="48" 
                    
                     />
                </b-col>

                <b-col cols="6" align-self="center" class="d-none d-md-block">
                            
                    <estatus-component :online="conversa.online"/>
                            
                        <p class="mb-1">{{ conversa.contact_name }}</p>
                        <p class="text-muted small mb-1">
                            {{ conversa.last_message }}
                        </p>
                </b-col>

                <b-col cols="3"  class="d-none d-md-block">
                     <p class="text-muted small small mb-0">
                           {{ lasTime }}
                        </p>
                </b-col>

             </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        props: {
            
            conversa: Object,
            selected: Boolean
        },
        computed: {
            lasTime(){
                return moment(
                this.conversa.las_time, 
                "YYYY-MM-DD hh:mm:ss")
                .locale('es')
                .fromNow('dddd');
            },
            variant(){

               // return this.selected ? 'secondary' : '';
                return this.selected ? 'info' : '';
            }
        }
    }
</script>
