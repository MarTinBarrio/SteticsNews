<template>
    <div>
        <div class="d-lg-flex d-sm-inline-flex justify-content-evenly pt-5">
            <div>
                <h2 class="navbar-brand">Stetics News</h2>
            </div>
            <div  id="buscarId" class="d-flex justify-content-end">
                <input
                        v-model="label"
                        class="form-control me-2" 
                        type="search"
                        placeholder="Search"
                        aria-label="Search">
                <button 
                    v-on:click="buscar"
                   
                    class="btn btn-outline-success">
                    <span class="material-icons">search</span> 
                </button>
            </div>

        </div>
    </div>

</template>


<script>
import { thisExpression } from '@babel/types';

export default {
    name: 'SearchComp',
    components: {},
    data(){

        return{
            
            buscarMsg: '',

        };
    },
    methods: {
        buscar() {
            this.$emit('buscarMsg', this.label);
            
        }
    },
    /* watch:{
        label: function(){
            //console.log(label);
            //this.$emit('label', this.label);
        }, 
    },*/
        
}


</script>