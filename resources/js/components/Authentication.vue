<template>
    <div class="container flex items-center justify-center text-white ">
        <div class="items-center justify-center bg-">
            <form id="form" class="p-20 text-black" @submit.prevent="submitForm">
                <div class="mb-4 rounded-xl ">
                    <label class="block">Name</label>
                    <input type="text" placeholder="Input Name" v-model="Name" name="Name"/>
                </div>
                <div class="mb-4">
                    <label class="block">Email</label>
                    <input type="text" placeholder="Input Email" v-model="Email" name="Email"/>
                </div>
                <div class="mb-4">
                    <label class="block">Password</label>
                    <input type="text" placeholder="Password" v-model="Password" name="Password"/>
                </div>
                <div class="mb-4">
                    <label class="block"> Confirm Password</label>
                    <input type="text" placeholder="Confirm Password" v-model="confirmPassword" name="v_Password"/>
                </div>
                <div class="">
                    <button type="submit" class="mx-10 bg-amber-600 rounded-sm">Submit form</button>
                </div>
                <div v-if="invalidPassword != ''" class="">
                    {{ invalidPassword }}
                </div>
        </form>
        </div>
        
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        data(){
            return{
                Name:"",
                Email:"",
                Password:"",
                confirmPassword:"",
                invalidPassword: "",
            }
        },
        methods:{
            async submitForm(){
                if(this.Password == this.confirmPassword){
                    const data = {
                    email: this.Email,
                    password: this.Password,
                    name: this.Name,
                    };
                    try{
                        axios.get('/sanctum/csrf-cookie')
                        .then(res=>{
                            console.log(res);
                        });
                        await axios.post('api/register', data)
                            .then(response=>{
                                console.log(response.data.msg);
                                this.$router.push({
                                name:'container',
                                params: {user:encodeURIComponent(response.data.msg)},
                                });
                                //route to another page e.g dashboard
                            });
                    }catch(error){
                        console.log('error from axios is' + error);
                    }
                }else{
                    this.invalidPassword = 'make sure the confirm password is the same with password';
                    return this.invalidPassword;
                }
            
            }
        },
        
    }
</script>