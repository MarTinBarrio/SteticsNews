<template>

    
    
    <div
        v-for="twit in twits"
        :key="twit.id"
        class="d-flex text-center justify-content-center pt-5 pb-5">
        <div class="card w-75">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h6 class="card-title">{{twit.nombre_categoria}}</h6>
                    <h6 class="card-title">{{twit.nombre_region}}</h6>
                </div>
                <hr>
                <p class="card-text w-100">
                    {{ twit.contenido_publicacion }}
                </p>
                <hr>
                <div class="d-flex justify-content-between">
                    <h6 class="card-title">{{ getDate(twit.creation_date) }}</h6> 
                    <!-- <p class="card-title">{{ twit.creation_date }}</p> -->

                    <h6 v-if="twit.links" class="card-title">Leer mas en: <router-link 
                        v-for="link in twit.links"
                        v-bind:to="'//' + link.link" target="_blank"
                        >
                        &nbsp;{{link.nombre}}</router-link>
                    </h6>
                </div>
                
            </div>
        </div>
    </div>


</template>

<script>

import moment from 'moment'


export default {
    name: 'card',
    props: ['twits'],
    data(){
        //console.log(this.twits[0].creation_date);
    },
    methods: {
            getDate : function (date) {
                return moment(date, 'YYYY-MM-DD hh:mm:ss').fromNow();
                
            }
    }
}

</script>

<style scoped>
	a {
  text-decoration: none;
}
</style>
