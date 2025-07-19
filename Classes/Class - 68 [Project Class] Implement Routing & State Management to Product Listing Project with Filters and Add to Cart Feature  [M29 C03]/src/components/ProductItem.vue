<script setup>
import { useCartStore } from "../stores/cart";
// defineProps(["product"]);
const props = defineProps({
  product: Object,
});

// const emit = defineEmits(["add-to-cart"]);

// function addToCart() {
//   emit("add-to-cart", props.product);
// }

// Using Store (Pinia)
const cartStore = useCartStore();

function addToCart() {
  cartStore.addToCart(props.product);
}
</script>

<template>
  <div class="border rounded shadow p-4 flex flex-col justify-between">
    <h2 class="text-lg font-semibold mb-2">{{ product.name }}</h2>
    <p class="text-gray-700 mb-4">${{ product.price }}</p>
    <button
      @click="addToCart"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >
      Add to Cart
    </button>
  </div>
</template>
