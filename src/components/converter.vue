<template>
			<div class="row">
		
				<div class="col-md-6" > 
					<input class="form-control" type="number" style="width: 100%;" v-model="inputval" @input="convert" >
						<select class="form-control"  style="width: 100%;" @change="changesource">
						<option  v-for="unit in units" :value="unit.val" >{{unit.unite}}</option>
					 	</select>
				</div> 
				<div class="col-md-6">
						<input class="form-control" type="number" style="width: 100%;" v-model="outputval" @input="convert" readonly>
						<select class="form-control"   style="width: 100%;" @change="changedest">
					 		<option  v-for="unit in units" :value="unit.val" >{{unit.unite}}</option>
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
				outputval:"0",
				inputval:"0",
				sourceunit:"1",
				destunit:"1"
			}
		},
		watch:{
			units:function (value) {
				// this.units=value;
				// this.convert();
				// this.changedest();
				// this.changesource();
				// console.log("hiii");
			}
		},
		methods:{
				convert(){
					this.outputval=(this.inputval/this.sourceunit)*this.destunit;
				},
				changesource(event){
					this.sourceunit=event.target.value;
					this.convert();
				},
				changedest(event){
					this.destunit=event.target.value;
					this.convert();
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