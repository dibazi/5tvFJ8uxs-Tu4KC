<template>


       <!-- <h2 class="text-lg font-semibold leading-6" >{{ item.companyName }}</h2> -->
        <p class="text-gray-600" > <strong>Anonce creer: </strong>{{ item.created_at }}</p>
        <p class="text-gray-600" > <strong>Companie nom: </strong>{{ item.companyName }}</p>
        <p class="text-gray-600" ><strong>Companie pays: </strong>{{ item.country }}</p>
        <p class="text-gray-600" ><strong>Companie ville: </strong>{{ item.city }}</p>
        <p class="text-gray-600" ><strong>Companie adress: </strong> {{ item.adress }}</p>
        <p class="text-gray-600" ><strong>Companie tel: </strong>  {{ item.companyTel }}</p>
        <p class="text-gray-600" ><strong>Companie domaine: </strong> {{ item.domaine }}</p>
        <p class="text-gray-600" ><strong>Position du post: </strong> {{ item.position }}</p>
        <p class="text-gray-600" ><strong>Salaire: {{item.currency}}</strong> {{ item.salary }}</p>
        <p class="text-gray-600" ><strong>Description:</strong> <br> {{ item.description }}</p>
        <p class="text-gray-600" ><strong>Email pour depot de candidature: </strong> {{ item.cvemail }}</p>
        

        

        <!-- 
        <input type="checkbox"
        @change="updateCheck()"
        v-model="item.completed"/>
        <span :class="[item.completed ?'completed' : '', 'itemText']">{{ item.name }}</span>
        <input value="delete" type="submit" @click="removeItem()" class="trashcan"/> -->

</template>

<script>
import axios from 'axios'
    export default {
        props: ['item', 'data'],

        data() {
                 return {

                isOpen: false,
                showText: false,
                Detail: false,
                name:'Show'
            }
        },

        methods: {

            openModal() {
                this.isOpen = true;
            },
            closeModal() {
                this.isOpen = false;

            },
            updateCheck() {
                axios.put('api/item/'+this.item.id,{
                    item: this.item
                }).then(responde => {
                    if(responde.status == 200){
                        this.$emit('itemchanged'); 
                    }
                }).catch(error => {
                    console.log(error)
                })
            },
            removeItem() {
                axios.delete('api/item/'+this.item.id)
                .then(response => {
                    if(response.status == 200) {
                        this.$emit('itemchanged');
                    }
                })
            }
        }
    }
</script>

<style scoped>
.completed{
    text-decoration: line-through;
    color: #999999;
}
.itemText{
    width: 100%;
    margin-left: 20px;
}
.item{
    display: flex;
    justify-content: center;
    align-items: center;
}
.trashcan{
    background: #e6e6e6;
    border: none;
    color: #ff0000;
    outline: none;
}
</style>