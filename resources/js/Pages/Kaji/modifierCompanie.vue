<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modifier annonce 
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <modidifier-companie-from :job="job"/>
                    
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
import ModidifierCompanieFrom from './ModidifierCompanieFrom.vue'
    export default {
        components: {
            AppLayout,
                ModidifierCompanieFrom

        },
        props: {
            job: Object,
        }
    }
</script>
