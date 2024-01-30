<template>
    <div class="container">
        <div v-for="info in infos" :key="info.id">
            {{info.id}} -- {{ info.email }}
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default{
    data(){
        return{
            infos:[],
        }
    },
    methods:{
        getData(){
            try{
                axios.get('/api/url')
                .then((response)=>{
                this.infos = response.data.data;
            });
            }catch(error) {
                console.error(error);
            };
        }
    },
    mounted() {
        this.getData()
    },
}
</script>