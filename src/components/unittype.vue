<template>
                <div class="row">
                    <div class="col-sm-6">
                        <select class="form-control"  style="width: 100%;" @change="changeunits">
                            <option value="weights">weights</option>
                            <option value="longeurs">longueur</option> 
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
