<template>
    <Transition name="modal-fade">
        <div class="absolute w-full bg-black bg-opacity-30 
        h-screen top-0 left-0 flex justify-center px-8"
        v-show="propVariable">
        <div class="p-4 bg-white self-start
         text-black  mt-32 max-w-screen-md">
            <slot />
            <button class="text-black mt-8 bg-gray-500 py-2 px-6" @click="propVariable=false">
                close
            </button>
        </div>
        </div>
    </Transition>
    
</template>

<script>
export default{
    props:['propVariable'],
}
</script>
<style scoped>
    .modal-fade-enter-active,.modal-fade-leave-active {
        transition: opacity 0.5s
    }
    .modal-fade-enter,
    .modal-fade-leave-to{
        opacity: 0;
    }
</style>