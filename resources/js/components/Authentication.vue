<template>
    <div class="container flex items-center justify-center bg--gray-500 text-white ">
        <form id="form" class="p-20" @submit.prevent="submitForm">
            <div class="mb-4">
                <label class="block">Email</label>
                <input type="text" placeholder="Input Email" v-model="email" name="email"/>
            </div>
            <div class="mb-4">
                <label class="block">Password</label>
                <input type="text" placeholder="Password" v-model="password" name="password"/>
            </div>
            <div class="">
                <button type="submit" class="mx-10 bg-amber-600 rounded-sm">Submit form</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                email:"",
                password:""
            }
        },
        methods:{
            submitForm(){
                
            }
        }
        
    }
</script>