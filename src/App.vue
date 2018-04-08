<template>
    <div class="container">
 <div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6">
                <app-unit-types @unitschanged="changeunits"></app-unit-types>
                <app-converter :units="unitslist" v-if="unitslist.length > 0"></app-converter> 
     </div>
     <div class="col-md-3"></div>
 </div>
    </div>
</template>

<script>
    import axios from 'axios' 
    import UnitTypes from './components/unittype.vue';
    import Converter from './components/converter.vue';

    export default {
        data:function () {
            return { 
                unitslist:[],
            }
        },
        components: {
            "app-unit-types": UnitTypes,
            "app-converter":Converter
        },
        methods:{
            changeunits(event){
                var app=this;
                axios.get("http://127.0.0.1/slim/units/"+event).then(function (res) {
                    
                var nouv_unit=res.data;
                var nouv_unit_list=[];

                for (var variable in nouv_unit) {
                    var obj={
                        unite:variable,
                        val:nouv_unit[variable]
                    }
                    
                    nouv_unit_list.push(obj);
                    
                }
                app.unitslist=nouv_unit_list;
                }).catch(e => {
      console.log(e)
    }) 

                
            } 
        }
    }
</script>

<style>
.col-sm-6
{
    padding: 20px auto;
}
</style>
