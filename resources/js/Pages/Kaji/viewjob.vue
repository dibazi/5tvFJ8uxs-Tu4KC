<template>
    <div class="todolistContainer">
        <div class="heading">
            <h2 id="title">Opportunites</h2>
            <h2 id="title">Merci a notre partenaire <strong class="senga">www.senga-service.com</strong></h2>
            <h2 id="title">Opportunites par particulier, click here <a  class="senga" href="/p/o">ici.</a></h2>
        </div>

        <viewlist :items="items"
        v-on:reloadlist="getList()"
        />
    </div>
</template>

<script>


import Viewlist from './viewlist.vue'

    export default {

        components:{

                Viewlist
        },
        data: function () {
            return{
                items: []
            }
        },
        methods: {
            getList () {
                axios.get('/api/c').then(response => {
                    this.items =response.data
                }).catch(error => {
                    console.log(error);
                })
            }
        },
        created(){
            this.getList();
        }

    }
</script>

<style scoped>
.todolistContainer{
    width: 350;
    margin: auto;
}
.heading{
    background: #e6e6e6;
    padding: 10px;
}
#title{
    text-align: center;
}
.senga{
    color: blue;
}
</style>