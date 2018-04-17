<template>
    <div class="container">   
        <div class="row">
            <div class="container" > 
                    <img src="./assets/Logoconv.png"/>
            </div> 
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="jumbotron converter">
                <app-unit-types @unitschanged="changeunits"></app-unit-types>
                <transition name="fade">
                   <app-converter :units="unitslist" v-if="unitslist.length > 0"></app-converter>    
                </transition>
            </div>
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
.fade-enter
{
    opacity:0;
    margin-left: 30px;
}
.fade-enter-active
{
    transition: all 1.5s;
}
.fade-leave
{
    
}
.fade-leave-active
{
    
}

.converter
{
background: -webkit-gradient(linear, left top, left bottom, color-stop(0.00, #0036ff), color-stop(1.00, #001a9b));
background: -webkit-linear-gradient(#0036ff, #001a9b);
background: -moz-linear-gradient(#0036ff, #001a9b);
background: -o-linear-gradient(#0036ff, #001a9b);
background: -ms-linear-gradient(#0036ff, #001a9b);
background: linear-gradient(#0036ff, #001a9b);
}
.col-sm-6
{
    padding: 20px auto;
}
html{
    overflow: hidden; 
}
body
{
    margin: 0;
    box-sizing: border-box;
}
html,body{
   
    background-image: linear-gradient(to bottom, #001baf, #6153c6, #988adb, #cbc3ee, #ffffff);
    background-repeat: no-repeat;
    height: 100%;
} 
</style>
