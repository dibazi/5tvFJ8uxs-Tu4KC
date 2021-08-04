<template>


    <div class="flex justify-center items-center min-h-screen bg-white">
        <div class="flex-1 max-w-5x1 p-16">
             <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-3 gap-4 grid-flow-dense">

                <div class="p-4 pr-6 bg-white border-1-8 border-transparent border-4 border-black rounded-md shawdow-lg space-y-2 " x-data="{text_open: false}"  v-for="(item, index) in items" :key="index">
                    <viewitem
                    :item="item"
                    class="item"
                    v-on:itemchanged="$emit('reloadlist')"
                    />

                </div>
                                
             </div>

        </div>
    </div>
</template>

<script>
import Viewitem from "./viewitem.vue"

export default {
    

  components: { Viewitem },

        props:['items', 'data'],

        data() {
                 return {

                isOpen: false,
                

            }
        },
                methods: {

            openModal() {
                this.isOpen = true;
            },
            closeModal() {
                this.isOpen = false;

            }
                }

     
    }
   
    
</script>

<style scoped>

</style>
