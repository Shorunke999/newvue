<template class="block bg-gray-500">
    <div class="flex flex-1 items-center justify-center">
        <router-view/>
    </div> 
</template>
<script>
import Authentication from '@/components/Authentication.vue';
import navComponent from '@/components/navComponent.vue';
export default {
    components: {
        Authentication,
        navComponent
    },
};
</script>