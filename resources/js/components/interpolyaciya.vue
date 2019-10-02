<template>	
	<div>		
		<h2>Счетчик = {{ counter }}</h2>
		<button v-on:click="riseCounter">Увеличить</button>
		
	</div>	
</template>

<script>
	export  default {
		data() {
			return {
				counter: 0
			}			
		},	
		methods: {
			riseCounter: function(num, event){
				this.counter ++			
			}
		},
		mounted() {
            console.log('Ok!');
        }	
	}			
</script>

<style lang="sass" rel="stylesheet/scss">

</style>