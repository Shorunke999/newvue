<template>
    <div class="">
        <navComponent/>
        <HomeView />
    </div>
  
</template>
<script>
import navComponent from '@/components/navComponent.vue';
import HomeView from './HomeView.vue';

export default {
    components: {
        navComponent,
        HomeView,
    },
};
</script>