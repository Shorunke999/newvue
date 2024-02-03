<template class="block bg-gray-500">
    <div class="">
        <router-view/>
    </div>
  
</template>
<script>
import Authentication from '@/components/Authentication.vue';

export default {
    components: {
        Authentication,
    },
};
</script>