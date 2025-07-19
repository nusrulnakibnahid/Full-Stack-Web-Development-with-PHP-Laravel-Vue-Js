
<template>
  <h1>Events</h1>
  <button @click="onClick">Click Event</button>

  <button @click.right="onRightClick">Right Click</button>

  <input @change="onChange" type="text" placeholder="On Change Event">

  <input @keydown="keyDown" type="text" placeholder="Key Down">
  <input @keyup="keyUp" type="text" placeholder="Key Up">

</template>

<script setup>
function onClick(){
  alert("I am click event");
}

function onRightClick(){
  alert("I am right click event");
}

function onChange(){
  alert("I am on change")
}

function keyDown(){
  alert("I am Key Down")
}

function keyUp(){
  alert("I am Key Up")
}
</script>