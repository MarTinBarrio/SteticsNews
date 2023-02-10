
import NavComponent from './components/NavComponent.vue';

<template>
  <NavComp/>
  <router-view/>
</template>

<script>
import NavComp from '@/components/NavComp.vue';

export default{
    name: "App",
      components: {
        NavComp
    }
}

</script>

<style>
#app {

  text-align: center;

}
</style>
