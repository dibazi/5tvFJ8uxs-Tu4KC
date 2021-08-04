<template>

    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formulaire pour companie
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

                                        <div><label for="" class="text-blue-700">Cree anonce comme particulier, click <a class="text-green-500" href="/p/f">ici</a>.</label></div>

                                        <form @submit.prevent="addItem()" action="" class="flex flex-col space-y-4 contact-form">

                                            <div class="contact-form-success alert alert-success mt-4" v-if="success">

                                                <p class="text-green-700">Bravo!!! votre anonce a ete creee voir click  <strong><a  class="text-bleu-500" href="/p/o">ici.</a></strong>. </p>
                                                <span class="mail-error-message text-1 d-block"></span>
                                            </div>

                                            <div class="contact-form-error alert alert-danger mt-4" v-if="error">
                                                <strong>Errors</strong>
                                                <span class="mail-error-message text-1 d-block"></span>
                                            </div>

                                            <div><label for="" class="text-blue-700">Information sur la companie</label></div>
                                            <div>
                                                <label for="companyName" class="text-sm">Nom </label>

                                                <input name="job.companyName" id="job.companyName" v-model="job.companyName" required type="text"  placeholder="Nom de la companie. Exp Kaji Limited"  class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300 form-control is-invalid" >
                                                <div v-if="hasErrors('job.companyName')">
                                                    <p class="text-red-700">Erreur: le nom doit avoir au moin 3 caractere.</p>                                                </div>
                                                </div>
                                            
                                            <div>
                                                <label for="job.country" class="text-sm">Pays </label>

                                                <input name="job.country" id="job.country" v-model="job.country" required  type="text" placeholder="Pays dans lequel la companie est etablie. Exp. RD Congo" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.country')">
                                                    <p class="text-red-700">Erreur: donnais le nom du pays dans lequel la companie est etablie.</p> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="job.city" class="text-sm">Ville </label>

                                                <input name="job.city" id="job.city" v-model="job.city" required  type="text" placeholder="Ville dans laquel la companie est etablie. Exp. Lubumbashi" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.city')">
                                                    <p class="text-red-700">Erreur: donnais le nom de la ville dans lequel la companie est etablie.</p> 
                                                </div>
                                            </div>
                                            
                                             <div>
                                                <label for="job.adress" class="text-sm">Adress </label>

                                                <input name="job.adress" id="job.adress" v-model="job.adress" required  type="text" placeholder="Adress de la companie" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.adress')">
                                                    <p class="text-red-700">Erreur: donnais l'adresse de la companie.</p> 
                                                </div>
                                            </div>
                                                                                        
                                             <div>
                                                <label for="job.companyTel" class="text-sm">Telephone</label>

                                                <input name="job.companyTel" id="job.companyTel" v-model="job.companyTel" required  type="text" placeholder="Numeraux telephone de la companie Exp. 0112346756" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.companyTel')">
                                                    <p class="text-red-700">Erreur: numero telephone de la companie.</p> 
                                                </div>
                                            </div>

                                            <div><label for="" class="text-blue-700">Information sur le poste</label></div>

                                             <div>
                                                <label for="domaine" class="text-sm">Domaine/Categorie</label>

                                                <input name="job.domaine" id="job.domaine" v-model="job.domaine" required  type="text" placeholder="Ex. construction" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.domaine')">
                                                    <p class="text-red-700">Erreur: domaine dans lequel la companie exerce.</p> 
                                                </div>
                                            </div>
                                          
                                             <div>
                                                <label for="" class="text-sm">Nom du post</label>

                                                <input name="job.position" id="job.position" v-model="job.position" required  type="text" placeholder="Ex. Chef de chantier" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.position')">
                                                    <p class="text-red-700">Erreur: post a pourvoir.</p> 
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <label for="" class="text-sm">choisir devise</label>
                                                <select name="job.currency" id="job.currency" v-model="job.currency" required class="ring ring-gray-300 outline-none focus:ring-teal-300 block mt-1 w-full px-4 py-2 border-gray-300 rounded-md shadow-sm">
                                                    <option value="FC">Franc congolais</option>
                                                    <option value="$">Dollor americain</option>
                                                </select>
                                                <div v-if="hasErrors('job.currency')">
                                                    <p class="text-red-700">Erreur: choisir devise.</p> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="salary" class="text-sm">Salaire </label>
                                                <input name="job.salary" id="job.salary" v-model="job.salary" required type="text" placeholder="Salaire du post Exp. 200000" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.salary')">
                                                    <p class="text-red-700">Erreur: salaire du post.</p> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="job.description" class="text-sm">Description</label>
                                                <textarea name="job.description" id="job.description" v-model="job.description" required  rows="10" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300" placeholder="Description du post, responsabilite..."></textarea>
                                                <div v-if="hasErrors('job.description')">
                                                    <p class="text-red-700">Erreur: description du role.</p> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="job.dateFinal" class="text-sm">Date final</label>
                                                <input name="job.dateFinal" id="job.dateFinal" v-model="job.dateFinal" required  type="text" placeholder="Date final depot de candidature Exp. 21/02/2021" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.dateFinal')">
                                                    <p class="text-red-700">Erreur: Date final.</p> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="cvemail" class="text-sm">Adress mail pour cv</label>

                                                <input name="job.cvemail" id="job.cvemail" v-model="job.cvemail" required  type="email" placeholder="Adress mail ou envoyer les cv Exp. adressecv@kaji.com" class="ring ring-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-teal-300">
                                                <div v-if="hasErrors('job.cvemail')">
                                                    <p class="text-red-700">Adress mail ou envoyer les cv.</p> 
                                                </div>
                                            </div>

                                            <button class="inline-block self-end bg-blue-700 text-white font rounded-lg px-6 py-2 uppercase ">Publie</button>
                                            <div v-if="success">
                                                 <p class="text-green-700">Bravo!!! votre anonce a ete creee voir click  <strong><a  class="text-bleu-500" href="/c/o">ici.</a></strong>. </p>
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

                job:{
                   companyName:null,
                   country:null,
                   city:null,
                   adress:null,
                   companyTel:null,
                   domaine:null,
                   position:null,
                   salary:null,
                   currency:null,
                   dateFinal:null,
                   description:null
                   
                    
                }
            }
        },
            methods:{
            addItem(){
                if(this.job.companyName == ''){
                    return;
                }
                axios.post('/api/c', {
                    job: this.job
                }).then(response =>{
                    if(response.status == 201){
                        this.job.companyName = "";
                        this.job.country = "";
                        this.job.city = "";
                        this.job.adress = "";
                        this.job.companyTel = "";
                        this.job.domaine = "";
                        this.job.position = "";
                        this.job.currency = "";
                        this.job.salary = "";
                        this.job.description = "";
                        this.job.dateFinal = "";
                        this.job.cvemail = "";
                        this.$emit('itemchanged');
                        this.onSuccess(response.data.message);
                        this.redirect();
                             

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
