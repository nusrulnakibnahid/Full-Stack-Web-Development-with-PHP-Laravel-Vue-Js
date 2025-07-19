<script setup>
import ProductItem from "./ProductItem.vue";

const props = defineProps({
  products: Array,
});
</script>

<template>
  <div class="p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <ProductItem
      v-for="product in products"
      :key="product.id"
      :product="product"
    />
  </div>
</template>
