<script setup>
// defineProps(["product"]);
defineProps({
  product: Object,
});
</script>

<template>
  <div class="border rounded shadow p-4 flex flex-col justify-between">
    <h2 class="text-lg font-semibold mb-2">{{ product.name }}</h2>
    <p class="text-gray-700 mb-4">${{ product.price }}</p>
    <button
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >
      Add to Cart
    </button>
  </div>
</template>
