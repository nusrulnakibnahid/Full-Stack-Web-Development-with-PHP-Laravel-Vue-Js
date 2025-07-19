import { defineStore } from "pinia";
import { ref } from "vue";

export const useCartStore = defineStore("cart", () => {
  const cart = ref([]);

  // Add to cart
  function addToCart(product) {
    const exists = cart.value.find((item) => item.id === product.id);

    if (exists) {
      alert("Product already in cart");
      return;
    }

    cart.value.push(product);

    saveCart();
  }

  // Save cart items in the local storage
  function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart.value));
  }

  // load cart item
  function loadCart() {
    const stored = localStorage.getItem("cart");
    if (stored) {
      cart.value = JSON.parse(stored);
    }
  }

  //Cart count
  const cartCount = () => cart.value.length;

  return { cart, addToCart, loadCart, saveCart, cartCount };
});
