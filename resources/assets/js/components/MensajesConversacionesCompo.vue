<template>
 
		<b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
		  <b-img  :src="image"  rounded="circle" width="48"  height="48" slot="aside" />
		 	<b-card ><slot></slot></b-card>  
		</b-media>

</template>

<script>
    export default {
       		props: {
                writtenByMe: Boolean,
                image: String
            },
        data(){
            return{
            	content: 'abc'
            };
        },
        mounted() {
           // console.log('Valor writtenByMe',this.writtenByMe)
        }
    }
</script>
