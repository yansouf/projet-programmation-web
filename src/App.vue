<template>
    <div class="container">
 
                <app-unit-types @unitschanged="changeunits"></app-unit-types>
                <app-converter :units="unitslist" :trys="test"></app-converter>
 
    </div>
</template>

<script>
    import UnitTypes from './components/unittype.vue';
    import Converter from './components/converter.vue';

    export default {
        data:function () {
            return { 
                test:"sdfdsf",
                unitslist:[{unite:"Kg",val:1},
                        {unite:"G",val:1000},
                        {unite:"Lbs",val:2.20462},
                        {unite:"mg",val:1000000}],
                weights:[{unite:"Kg",val:1},
                        {unite:"G",val:1000},
                        {unite:"Lbs",val:2.20462},
                        {unite:"mg",val:1000000}],
                longeurs:[{unite:"Km",val:1},
                            {unite:"m",val:1000},
                            {unite:"Inches",val:39370.08}]
            }
        },
        components: {
            "app-unit-types": UnitTypes,
            "app-converter":Converter
        },
        methods:{
            changeunits(event){
                this.unitslist=this[event];
              
            }
        }
    }
</script>

<style>
</style>
