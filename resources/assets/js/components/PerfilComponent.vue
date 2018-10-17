<template>
   <b-container >
     <b-form class="m-3" action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" v-model="csrfToken" />
      <b-form-group label="Correo Electronico :">
        <b-form-input  disabled
                      type="email"  name="email" v-model="user.email"   
                      placeholder="Ingresa tú correo electronico ">
        </b-form-input>

      </b-form-group>
      <b-form-group label="Nombre:" >
        <b-form-input type="text"
                      v-model="user.name"
                      required name="name"
                      placeholder="Ingresa tú nombre de usuario">
        </b-form-input>
      </b-form-group>

      <b-form-group label="Contraseña:" >
        <b-form-input type="password" name="clave"
                     placeholder="Ingresa una clave si la quieres cambiar">
        </b-form-input>
      </b-form-group>

      <b-form-group label="Cambiar imagen:" >
        <b-form-file placeholder="Cambiar foto" name="foto" />
        </b-form-input>
      </b-form-group>

         <b-img :src="image" rounded="circle"    width="60" height="60" blank-color="#777" 
                alt="Imagen actual"  class="m-1" />
   
  
      <b-button type="submit" variant="primary">Guardar cambios</b-button>
      
    </b-form>
   </b-container>
    
</template>

<script>
export default {

  props: {
    user: Object,
    csrfToken: String
  },
  data () {
    return {
   
    }
  },
  computed: {

        image(){
        return `/users/${this.user.image}`;
        // return this.user;

        }

  }
}
</script>