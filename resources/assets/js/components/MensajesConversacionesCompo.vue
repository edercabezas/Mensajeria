<template>
 
		<b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
		  <b-img slot="aside" rounded="circle" blank blank-color="#ccc" width="50" alt="placeholder" />
		 	<b-card ><slot></slot></b-card>  
		</b-media>

</template>

<script>
    export default {
       		props: {writtenByMe: Boolean},
        data(){
            return{
            	content: 'abc'
            };
        },
        mounted() {
            console.log('Valor writtenByMe',this.writtenByMe)
        }
    }
</script>
