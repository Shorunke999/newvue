<template>
    <div class="">
        <!--<navComponent/>
        <HomeView />-->
        <Authentication />
    </div>
  
</template>
<script>
import navComponent from '@/components/navComponent.vue';
import HomeView from './HomeView.vue';
import Authentication from './Authentication.vue';

export default {
    components: {
        navComponent,
        HomeView,
        Authentication,
    },
};
</script>