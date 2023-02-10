<template>
    
    <SearchComp @buscarMsg="handleButton"></SearchComp> 
    <CardComp :twits="twits"/>  
</template>


<script>
// @ is an alias to /src
import CardComp from "@/components/CardComp.vue";
import SearchComp from "@/components/SearchComp.vue";
import axios from "axios";


export default {
    name: 'HomeView',
    components: {
        SearchComp,
        CardComp
    },

    methods: {

        handleButton (value){
            this.theLabel = value; 

             if (value){
                this.twits = this.fulltwits.map(function(element){
                    return element.etiquetas ? (element.etiquetas.find(etiqueta => etiqueta.etiqueta.toUpperCase() === value.toUpperCase()) ? element : null) : null;

                });
                const newT = this.twits.filter(Boolean);
                this.twits = newT;
                console.log(this.twits);
                
            }else{
                this.twits = this.fulltwits;
            }
        }
    },


    data: () => ({twits: null, fulltwits: null, theLabel: null}),
        async created(){
        let response = await axios.get("http://localhost:3333/");
        
        this.twits = response.data;

        this.twits.forEach(twit => {
            const enlaces = JSON.parse(twit.links);
            twit.links = enlaces; 

            const etiquetas = JSON.parse(twit.etiquetas);
            twit.etiquetas = etiquetas; 
            
        });

        this.fulltwits = this.twits;
        return this.twits;
    },
    

}

</script>

<style>
</style>