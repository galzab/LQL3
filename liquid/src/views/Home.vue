<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/CNMC_Logotipo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
    <contenedor />
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '../components/HelloWorld.vue'
import  Contenedor  from '../components/Contenedor.vue';

export default {
  name: 'home',
  components: {
    HelloWorld,
    Contenedor
  }
}
</script>
