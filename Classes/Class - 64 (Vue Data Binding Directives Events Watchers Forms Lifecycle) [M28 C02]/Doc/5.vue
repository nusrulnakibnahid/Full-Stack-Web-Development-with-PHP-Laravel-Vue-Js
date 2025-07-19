
<template>
  <table>
    <thead>
    <tr>
      <th>Flag</th>
      <th>Name</th>
      <th>Capital</th>
    </tr>
    </thead>
    <tbody>
    <tr v-for="(item) in listData">
      <td><img :src="item['flag']" style="width: 25%"></td>
      <td>{{item['name']}}</td>
      <td>{{item['capital']}}</td>
    </tr>
    </tbody>
  </table>

</template>

<script setup>

import axios from "axios";
import {ref} from "vue";

const listData = ref([]);

getCountryList();
async function getCountryList(){
  let res = await axios.get("https://countrylist.teamrabbil.com/api/country-list");
  listData.value = res.data;
}



</script>