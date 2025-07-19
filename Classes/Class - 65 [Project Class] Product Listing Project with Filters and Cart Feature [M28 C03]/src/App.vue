<script setup>
import { computed, ref } from "vue";
import FilterComponent from "./components/FilterComponent.vue";
import HeaderComponent from "./components/HeaderComponent.vue";
import ProductList from "./components/ProductList.vue";

//Product Data
const products = ref([
  { id: 1, name: "iPhone 15", price: 1000 },
  { id: 2, name: "MacBook Pro", price: 2500 },
  { id: 3, name: "AirPods Pro", price: 300 },
  { id: 4, name: "Apple Watch", price: 400 },
  { id: 5, name: "iPad Pro", price: 1500 },
  { id: 6, name: "iMac", price: 2000 },
]);

const searchTerm = ref("");
const sortOrder = ref("");

// Search and Filter
const filteredProducts = computed(() => {
  let list = products.value;

  //search
  if (searchTerm.value) {
    list = list.filter((product) =>
      product.name.toLowerCase().includes(searchTerm.value.toLowerCase())
    );
  }
  //filter
  if (sortOrder.value === "low-high") {
    list = [...list].sort((a, b) => a.price - b.price);
  } else if (sortOrder.value === "high-low") {
    list = [...list].sort((a, b) => b.price - a.price);
  } else if (sortOrder.value === "a-z") {
    list = [...list].sort((a, b) => a.name.localeCompare(b.name));
  } else if (sortOrder.value === "z-a") {
    list = [...list].sort((a, b) => b.name.localeCompare(a.name));
  }

  return list;
});
</script>

<template>
  <HeaderComponent />
  <FilterComponent v-model:search="searchTerm" v-model:sort="sortOrder" />
  <ProductList :products="filteredProducts" />
</template>

<style scoped></style>
