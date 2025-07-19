<script setup>
import {onBeforeMount, onMounted, ref} from "vue";
import axios from "axios";

const countries = ref([]);
const loading = ref(true);

onBeforeMount(()=>{

})

onMounted(async ()=>{
  try{
    const res = await axios.get('https://countrylist.teamrabbil.com/api/country-list');
    countries.value = res.data;
  }catch (error){
    console.log('API Error',error)
  }finally {
    loading.value = false;
  }
})

</script>

<template>

  <div>
    <h1>Country List</h1>
    <p v-if="loading">Loading....</p>
    <ul v-else>
      <li v-for="country in countries">{{country.name}}</li>
    </ul>
  </div>

</template>
