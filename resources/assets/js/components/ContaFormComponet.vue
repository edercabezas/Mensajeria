<template>

             <b-form class=" my-3 mx-3">
                <b-form-input  type="text" class="text-center"
                v-model="querybusqueda"
                placeholder="Buscar contacto.....">
                </b-form-input>

             </b-form>

</template>



<script type="text/javascript">

    export default {

        computed: {

            querybusqueda: {

                  get () {
                      return this.$store.state.querybusqueda;
                 },
                 set (value) {
                     this.$store.commit('newQuerysearch', value);
                }
              }
            }
          }


</script>