<template>
    <main class="container text-white">
        <div class="pt-4 mb-0 relative ">
            <input type="text" placeholder="Search for a city or state"
            class="py-2 px-1 w-full bg-transparent border-b focus:outline-none
             focus:border-gray-500 focus:shadow-[0px_1px_0_0_#004E71]"
             v-model="searchQuery"
             @input="getData">
        </div>
        <ul class="block  bg-gray-500 text-white w-full 
        py-2 px-1 shadow-md top-[66px] mt-0"
        v-if="results">
            <p v-if="error_v || results.length === 0 ">
                Sorry,no result found using this query or error with the api
            </p>
            <template v-else>
                <li v-for="result in results" :key="result.id"
                class="py-1 cursor-pointer "
                @click="previewCity(result)">
                {{ result.state}},{{ result.city}} city
                
                </li>
            </template>
        </ul>
            
    </main>
    
</template>

<script>
import axios  from 'axios'
import {useRouter} from "vue-router";
    export default {
        data(){
            return{
                searchQuery:"",
                queryTimeout: null,
                apiKey:"",
                results:null,
                error_v : false,
            }
        },
        methods: {
            //fetch data from endpoint 
            getData(){
                this.queryTimeout = setTimeout(async()=>{
                if(this.searchQuery != ""){
                    try{
                        const info = this.searchQuery;
                        await axios.get('api/search/'+info)
                        .then((response)=>{
                        this.results = response.data.data;
                        console.log(response.data.data);
                        return this.results;
                        });
                    }catch(error){
                        this.error_v = true;
                        console.log(error);
                    }
                }else{
                        this.results = null;
                        return;
                    }
                },300);
            },
            previewCity(result){
                console.log(result);///this will log the result from the api..when clicked from the li tag
                const city= result.city; 
                const state = result.state;
                console.log(city,state);//to check if the values are gotten from the array
                this.$router.push({
                    name: 'cityView',
                    params:{
                        state: state,
                        city:city,
                    },
                    query:{
                        long: result.long,
                        lat:result.lat
                    }
                });
                /*useRouter().push({
                    name:cityView,
                    params:{state:state, city: city},//setting the params from the url to value gotten from result
                    query:{
                        lat: result.lat,
                        long: result.long
                    },
                    preview: true
                })*/
            }
            
        },    
        
    }
</script>
