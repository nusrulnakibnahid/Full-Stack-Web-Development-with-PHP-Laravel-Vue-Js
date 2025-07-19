<script setup>
import { useProductStore } from "../stores/product";
import ProductItem from "./ProductItem.vue";

// const props = defineProps({
//   products: Array,
// });

// const emit = defineEmits(["add-to-cart"]);

// function emitAddToCart(product) {
//   emit("add-to-cart", product);
// }

const productStore = useProductStore();
</script>

<template>
  <div class="p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- <ProductItem
      v-for="product in products"
      :key="product.id"
      :product="product"
      @add-to-cart="emitAddToCart"
    /> -->
    <ProductItem
      v-for="product in productStore.filteredProducts"
      :key="product.id"
      :product="product"
    />
  </div>
</template>
