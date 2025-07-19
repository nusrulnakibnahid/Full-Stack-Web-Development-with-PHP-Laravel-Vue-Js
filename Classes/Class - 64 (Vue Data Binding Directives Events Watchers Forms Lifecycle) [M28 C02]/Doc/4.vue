
<template>
  <form @submit.prevent="onFormSubmit">
    <label>User Name</label>
    <input v-model="MyFormData.user" type="text"> <br>

    <label>Password</label>
    <input v-model="MyFormData.pass" type="password"> <br>

    <button type="submit">Submit</button>
  </form>
</template>

<script setup>

import {reactive} from "vue";

const MyFormData = reactive({
  user:"",
  pass:""
})

function onFormSubmit(){
  console.log(MyFormData);
}

</script>