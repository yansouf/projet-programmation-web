<template>
			<div class="row">
		
				<div class="col-md-6" > 
					<input class="form-control" type="number" style="width: 100%;" v-model="inputval"  >
						<select class="form-control"  style="width: 100%;" v-model="sourceunit" selected="unit.vall==1">
						<option  v-for="unit in units" :value="unit.val" >{{unit.unite}}</option>
					 	</select>
				</div> 
				<div class="col-md-6">
						<input class="form-control" type="number" style="width: 100%;" v-model="outputval" readonly>
						<select class="form-control"   style="width: 100%;" v-model="destunit">
					 		<option  v-for="unit in units" :value="unit.val" selected="unit.vall==1">{{unit.unite}}</option>
					 	</select>

				</div>
			</div>
</template>
<script>
export default {
		props:{
			units:Array,
			trys:String
		},
		data: function () {
			return{
				inputval:0,
				sourceunit:1,
				destunit:1
			}
		},
		watch:{
			units:function () {
				this.sourceunit=1;
				this.destunit=1;
			}
		},
		computed:{
			outputval:function(){
				return (this.inputval/this.sourceunit)*this.destunit;
			}
		}
}
</script>
<style>
.col-md-6
{
	padding:20px 20px ;
}
</style>