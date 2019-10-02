<template>	
	<div>
		<input type="text" v-on:input="changeName">
		<h1>Hello {{ name }}</h1>
	</div>	
</template>

<script>
	export  default {
		data() {
			return {
				name: 'Vue!'
			}			
		},
		methods: {
			changeName: function(event) {
				this.name = event.target.value
			}
		},
		ready() {
            console.log('Component ready.');
        }	
	}			
</script>

<style lang="sass" rel="stylesheet/scss">

</style>