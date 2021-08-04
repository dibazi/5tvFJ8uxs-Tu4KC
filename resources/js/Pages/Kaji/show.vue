<template>
    <h1>test</h1>
    <button v-on:click="forme1">Forme1</button>
    <br>
    <button v-on:click="forme2">Forme2</button>

    <p v-if="form1">Form1</p>
    <p v-else-if="form2">Form2</p>
    <!--
                                            <div>
                                            <button v-on:click="forme1">Forme1</button>
                                            <button v-on:click="forme2">Forme2</button>

                                            <div v-if="form1">
                                                <div><label for="" class="text-blue-700">Information sur la companie</label></div>
                                                <div>
                                                    <label for="" class="text-sm">Companie </label>

                                                    <input v-model="job.name" type="text" placeholder="Nom de la companie" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                </div>
                                            </div>
                                            <div v-else-if="form2">
                                                <div><label for="" class="text-blue-700">Information sur le particulier</label></div>
                                                <div>
                                                    <label for="" class="text-sm">Particulier </label>

                                                    <input v-model="job.name" type="text" placeholder="Nom de la companie" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                </div>
                                            </div>
                                    </div>
    -->
</template>
<script>
export default {
            data:{
            form1:false,
            form2:false
        }
}
</script>