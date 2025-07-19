<script setup>
const search = defineModel("search");
const sortOrder = defineModel("sort");
</script>

<template>
  <div class="p-4 flex flex-col sm:flex-row gap-4">
    <input
      v-model="search"
      class="border rounded px-4 py-2 w-full"
      type="text"
      placeholder="Search products..."
    />
    <!-- Sort Dropdown -->
    <select
      v-model="sortOrder"
      class="border rounded px-4 py-2 w-full sm:w-1/2"
    >
      <option value="">Sort By</option>
      <option value="low-high">Price: Low to High</option>
      <option value="high-low">Price: High to Low</option>
      <option value="a-z">Name: A - Z</option>
      <option value="z-a">Name: Z - A</option>
    </select>
  </div>
</template>
