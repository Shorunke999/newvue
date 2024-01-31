<template> 
    <header class="sticky top-0 bg-primary-weather shadow-lg">
        <nav class="container flex flex-col sm:flex-row items-center gap-4 text-white py-6">
            <router-link :to="{name:'nav'}">
                <div class="flex items-center gap-3 ">
                <i class="fa-solid fa-sun text-2xl" ></i>
                <p class="text-2xl">The local weather</p>
                </div>
            </router-link>
            <div class="flex gap-3 justify-end flex-1">
                <i class="fa-solid fa-circle-info text-xl 
                hover:text-pretty cursor-pointer" @click="changeProp">
                </i>
                <i class="fa-solid fa-plus text-xl 
                hover:text-pretty cursor-pointer"></i>
            </div>
            <BaseModal :propVariable="propvalue">
                <h1>hello world</h1>
                <p class="">predicting the weather</p>
            </BaseModal>
        </nav>
    </header>
</template>

<script>
import BaseModal from './BaseModal.vue';
export default{
    components:{ BaseModal},
    data(){
        return{
            propvalue: false,
        }
    },
    methods: {
        changeProp(){
            this.propvalue =!this.propvalue;
        }
    },
}
</script>