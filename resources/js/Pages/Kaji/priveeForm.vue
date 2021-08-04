<template>

    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formulaire pour particulier 
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="antialiased bg-gray-100">

                        <div class="flex w-full min-h-screen justify-center items-center">
                            <div class="grid grid-cols-1 md:grid-cols-2 flex flex-col md:flex-row md:space-x-6 md:space-y-0 space-y-6 bg-blue-700 w-full max-w-4x1 p-8 rounded-xl shadow-lg text-white">
                                <div class="flex flex-col justify-between">
                                    <div>
                                        <H1 class="font-bold text-4xl tracking-wide">Contact Us</H1>
                                        <p class="pt-2 text-blue-100 text-sm"></p>
                                    </div>

                                    <div class="flex flex-col space-y-4">
                                        <div class="inline-flex space-x-2 item-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 
                                            17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.
                                            678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.
                                            459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.
                                            511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 
                                            .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 
                                            1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 
                                            1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                            </svg>
                                            <span>+(27)780109045</span>
                                        </div>

                                        <div class="inline-flex space-x-2 item-center">
                                            <h3>Adress mail:</h3>
                                            <span>E-mail</span>
                                        </div>

                                        <div class="inline-flex space-x-2 item-center">
                                            <h3>Adress:</h3>
                                            <span>Bryanston, olivedale</span>
                                        </div>

                                    </div>
                
                                    <div class="flex space-x-4 text-lg">
                                    <a href=""><span>Facebook</span></a>
                                    <a href=""><span>Instagram</span></a>
                                    <a href=""><span>Twitter</span></a>

                                    </div>
                                </div>
                                <div>
                                    <div class="bg-white rounded-xl shawdow-lg p-8 text-gray-600">

                                        <div><label for="" class="text-blue-700">Cree anonce comme companie, click <a class="text-green-500" href="/c/f">ici</a>.</label></div>




                                        <form @submit.prevent="addItem()" action="" class="flex flex-col space-y-4">
                                            <div><label for="" class="text-blue-700">Information sur le Particulier</label></div>

                                            
                                            <div class="contact-form-success alert alert-success mt-4" v-if="success">

                                                <p class="text-green-700">Bravo!!! votre anonce a ete creee voir click  <strong><a  class="text-bleu-500" href="/p/o">ici.</a></strong>. </p>
                                                <span class="mail-error-message text-1 d-block"></span>
                                            </div>

                                            <div class="contact-form-error alert alert-danger mt-4" v-if="error">
                                                <strong>Errors</strong>
                                                <span class="mail-error-message text-1 d-block"></span>
                                            </div>

                                            <div>
                                                <label for="" class="text-sm">Pays </label>

                                                <input name="prive.country" id="prive.country" v-model="prive.country" type="text" placeholder="Pays ou le post est disponible" required class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('prive.country')">
                                                    <p class="text-red-700">Entrer pays.</p> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="" class="text-sm">Ville </label>

                                                <input name="prive.city" id="prive.city" v-model="prive.city" type="text" placeholder="Ville ou le post est disponible" required class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('prive.city')">
                                                    <p class="text-red-700">Entrer ville.</p> 
                                                </div>
                                            </div>
                                                                                          
                                            <div><label for="" class="text-blue-700">Information sur le poste</label></div>

                                             <div>
                                                <label for="" class="text-sm">Domaine/Categorie</label>

                                                <input name="prive.domaine" id="prive.domaine" v-model="prive.domaine" type="text" placeholder="Ex. construction" required class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('prive.domaine')">
                                                    <p class="text-red-700">Entrer domaine.</p> 
                                                </div>
                                            </div>
                                          
                                             <div>
                                                <label for="" class="text-sm">Nom du post</label>

                                                <input v-model="prive.position" type="text" placeholder="Ex. Chef de chantier" required class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                            </div>
                                            <div>
                                                <label for="" required class="text-sm">Salaire </label>

                                                <select name="currency" id="" required v-model="prive.currency">
                                                    <option value="">Choisir monaie</option>
                                                    <option value="FC">Franc congolais</option>
                                                    <option value="$">Dollor americain</option>
                                                </select>

                                                <input name="prive.salary" id="prive.salary" v-model="prive.salary" required type="text" placeholder="Salaire du post Exp. 200000" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('prive.salary')">
                                                    <p class="text-red-700">Entrer Salaire.</p> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="" class="text-sm">Description</label>

                                                <textarea v-model="prive.description" required name="prive.description" id="prive.description" rows="10" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300" placeholder="Description du post, responsabilite..."></textarea>
                                                <div v-if="hasErrors('prive.description')">
                                                    <p class="text-red-700">Entrer Description.</p> 
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <label for="" class="text-sm">Date final</label>

                                                <input name="prive.dateFinal" id="prive.dateFinal" v-model="prive.dateFinal" required type="text" placeholder="Date final depot de candidature Exp. 21/02/2021" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('prive.dateFinal')">
                                                    <p class="text-red-700">Entrer Date final.</p> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="" class="text-sm">Adress mail pour cv</label>

                                                <input name="prive.cvemail" id="prive.cvemail" v-model="prive.cvemail" required type="email" placeholder="Adress mail ou envoyer les cv" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('prive.cvemail')">
                                                    <p class="text-red-700">Entrer pour envoie cv.</p> 
                                                </div>
                                            </div>

                                            <button @click="redirect" class="inline-block self-end bg-blue-700 text-white font rounded-lg px-6 py-2 uppercase ">Publie</button>

                                            <div v-if="success">
                                                 <p class="text-green-700">Bravo!!! votre anonce a ete creee voir click  <strong><a  class="text-bleu-500" href="/p/o">ici.</a></strong>. </p>
                                            </div>
                                            <div v-if="error == true" >
                                                 <p class="text-red-700">Attention!!! votre formulaire contient des erreurs verifier svp <br>
                                                 si vous remontez le formulaire l'erreur est visible. </p>
                                            </div>

                                        </form>

                                    </div>

                                </div>
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
    import axios from 'axios'


    export default {
        components: {
            AppLayout

        },
                data: function() {
            return{
                success: false,
                error: false,
                errors: {},

                prive:{

                   country:null,
                   city:null,
                   domaine:null,
                   position:null,
                   currency:null,
                   salary:null,
                   description:null,
                   dateFinal:null,
                   cvemail:null
                       
                }
            }
        },
            methods:{
            addItem(){
                if(this.prive.email == ''){
                    return;
                }
                axios.post('/api/p', {
                    prive: this.prive
                }).then(response =>{
                    if(response.status == 201){
                        this.prive.country = "";
                        this.prive.city = "";
                        this.prive.domaine = "";
                        this.prive.position = "";
                        this.prive.currency = "";
                        this.prive.salary = "";
                        this.prive.description = "";
                        this.prive.dateFinal = "";
                        this.prive.cvemail = "";
                        this.onSuccess(response.data.message);
                        this.$emit('itemchanged');
                        
                    }
                }).catch( error =>{

                    if(error.response.status = 422){
                        this.setErrors(error.response.data.errors);
                        this.onFailure(error.response.data.message);


                    }else{
                        
                    console.log(error);
                    }
                })
            },
            onSuccess(message){
                this.success = true;
            },
            onFailure(message){
                this.error = true;
            },
            setErrors(errors){
                this.errors = errors;
            },
            hasErrors(fieldName){
                return (fieldName in this.errors);
            },
            redirect(){
                this.$router.push('/c/o')
            }
        }
    }
</script>
