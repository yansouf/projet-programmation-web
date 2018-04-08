<template> 
                <div class="row" >
                    <div class="col-sm-12">
                        <select class="form-control"  style="width: 100%;" @change="changeunits">
                            <option v-for="unt in unite" :selected="unt=='Choisisez les unités'" :hidden="unt=='Choisisez les unités'">{{unt}}</option>
                        </select>
                    </div>
                </div>      

</template>

<script>
export default{
    data(){
            return {
                unite:["Choisisez les unités","Weights","Longeurs"]
            }
    },
        methods:{
            changeunits(event){
                this.$emit('unitschanged',event.target.value); 
            }
        }
}
</script>

<style scoped>
 
</style>
