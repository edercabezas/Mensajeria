<template>
	 <div >
	 	 <b-form class=" my-3 mx-3">
            <b-form-input  type="text" class="text-center"
                placeholder="Buscar contacto.....">
            </b-form-input>
       </b-form>
	 <b-list-group>
	         <contacto-component variant="dark">
             </contacto-component>

             <contacto-component variant="">
             </contacto-component>

             <contacto-component variant="secondary">
             </contacto-component> 
	</b-list-group>
	 </div>
</template>


<script>
    export default {
       
        data(){
            return{};
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
