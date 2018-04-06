<template> 
                <div class="row" >
                    <div class="col-sm-12">
                        <select class="form-control"  style="width: 100%;" @change="changeunits">
                            <option value="Weights">Weights</option>
                            <option value="Longeurs">Longeurs</option> 
                        </select>
                    </div>
                </div>      
    

</template>

<script>
export default{
        methods:{
            changeunits(event){
                this.$emit('unitschanged',event.target.value);
            }
        }
}
</script>

<style scoped>
 
</style>
