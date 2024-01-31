<template>
    <main class="container text-white">
        <div class="pt-4 mb-8 relative ">
            <input type="text" placeholder="Search for a city or state"
            class="py-2 px-1 w-full bg-transparent border-b focus:outline-none
             focus:border-gray-500 focus:shadow-[0px_1px_0_0_#004E71]"
             v-model="searchQuery"
             @input="getData">
        </div>
        <ul class="absolute bg-gray-500 text-white w-full 
        py-2 px-1 shadow-md top-[66px]"
        v-if="results">
            <p v-if="error_v">
                Sorry, something went wrong with the data from the Api
            </p>
            <p v-if="error_v=false && results.length === 0 ">
                No results match your query, try a different term
            </p> 
            <template v-else>
                <li v-for="result in results" :key="result.id"
                class="py-2 cursor-pointer">
                {{ result.place_name }}
                </li>
            </template>
        </ul>
            
    </main>
    
</template>

<script>
import axios  from 'axios'
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
            getData(){
                this.queryTimeout = setTimeout(async()=>{
                if(this.searchQuery != ""){
                    try{
                         await axios.get(`http..url/$(searchQuery).json?access_token=$(apiKey)&types=place`)
                        .then(
                        (response)=>{
                        this.results = response.data.features;
                        return;
                        });
                    }catch{
                        this.error = true;
                    }
                   
                    }else{
                        this.results = null;
                        return;
                    }
                },300);
            }
            
        },    
        
    }
</script>
