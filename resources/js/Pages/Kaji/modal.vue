<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                test
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="bg-black bg-opacity-50 absolute inset-0 flex justify-center items-center">

                        <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
                            <div class="flex justify-between items-center " id="overlay">
                                <h4 class="text-lg front-bold">Confirm Delete ?</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                class="bi bi-x-lg h-5 w-5" viewBox="0 0 16 16" id="close-modal">
                                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 
                                1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 
                                8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                </svg>
                            </div>
                                <div class="mt-2 text-sm"> 
                                    <p>What is Lorem Ipsum?
                                    Lorem Ipsum is simply dummy 
                                    text of the</p> 
                                </div>
                                <div class="mt-3 flex justify-end space-x-3"> 
                                    <button class="px-3 py-1 rounded hover:bg-red-300
                                     hover:bg-opacity-50 hover:text-red-900">Cancel</button> 
                                    <button class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded ">Delete</button>
                                </div>
                        </div>
         

                    </div>

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Viewjob from './viewjob.vue'
    export default {
        components: {
            AppLayout,
            Viewjob

        },
    }

</script>
