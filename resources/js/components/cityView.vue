<template>
    <div>
        <navComponent />
         <div class="flex flex-col flex-1 justify-center items-center bg-gray-500">
            <div v-if="loading===false" class="text-white p-0 cursor-pointer" @click="visibleData">
                <p> The {{ route.params.city }} weather forecast is{{ route.query.long }}</p>
                <!--our api is used to design lot of things here
                    following the youtube tutoria..there more data usage and design here
                    go to video #8-->
            </div>
            <div v-if="loading" class="text-white cursor-pointer" @click="visibleData" >
            loading data...
            </div>    
        </div>
    </div>
   
</template>

<script>
import axios from 'axios';
import { useRoute } from 'vue-router';
import navComponent from './navComponent.vue';
    export default {
  components: { navComponent },
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
            async getWeatherData(){
                const info ={
                    long: this.route.query.long,
                    lat: this.route.query.lat,
                };
                try{
                    const res = await axios.get('api/weatherUrl', info);
                        console.log('succesfully send data to api'); 
                        console.log(res);
                        this.weatherData = res.data;
                        this.loading = false;
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
