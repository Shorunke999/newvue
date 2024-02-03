<template>
    <div class="flex flex-col flex-1 justify-center items-center bg-gray-500">
        <div v-if="weatherData=null" class="text-white">
        loading data...
        </div>
        <div v-else class="text-white p-0">
            <p> The {{ route.params.city }} weather forecast is {{ weatherData }}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { useRoute } from 'vue-router';
    export default {
        data(){
            return{
              route: useRoute(),
              weatherData:null,
            }
        },
        methods:{
            async getWeatherData(){
                try{
                    //get data from   weather api using the long and lat params
                    this.weatherData = await axios.get(`url with key and params`);
                    //the raw data was worked on here..you can copy the code from git of understand what he did and write
                    return weatherData;
                }catch(error){
                    console.log(error);
                }
                
            }
        },
        mounted() {
            
        },
        
    }
</script>
