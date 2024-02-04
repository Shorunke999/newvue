<template>
    <div class="flex flex-col flex-1 justify-center items-center bg-gray-500">
        <div v-if="loading=false" class="text-white p-0">
            <p> The {{ route.params.city }} weather forecast is{{ route.query.long }}</p>
            <!--our api is used to design lot of things here
                following the youtube tutoria..there more data usage and design here
                go to video #8-->
        </div>
        <div v-if="loading" class="text-white" @click="visibleData">
        loading data...
        </div>
        
    </div>
</template>

<script>
//import axios from 'axios';
import { useRoute } from 'vue-router';
//import navComponent from '@/components/navComponent.vue';
    export default {
        //components: navComponent,
        data(){
            return{
              route: useRoute(),
              weatherData:null,
              loading:true,
            }
        },
        methods:{
            visibleData(){
                this.loading =!this.loading;
            },
            getWeatherData(){
                try{
                    /*const response = await axios.get('api/weather',{
                            long: this.route.query.long,
                            lat: this.route.query.lat,
                            //const response = await axios.get(`http://api.openweathermap.org/data/2.5/onecall?lat=${this.route.query.lat}
                            //&lon=${this.route.query.long}&exclude={part}&appid=4c806a0a790e087fc77ffe1bbed25765`)
                    })
                    .then(res=>{
                        console.log(res);
                        this.weatherData = res.data;
                        console.log('succesfully send data to api');
                        this.loading = false;
                    });*/
                    console.log('for api');
                    this.weatherData = true;
                }catch(error){
                    console.log(error);
                }
                
            }
        },
        mounted() {
            this.getWeatherData();
        },
        
    }
</script>
