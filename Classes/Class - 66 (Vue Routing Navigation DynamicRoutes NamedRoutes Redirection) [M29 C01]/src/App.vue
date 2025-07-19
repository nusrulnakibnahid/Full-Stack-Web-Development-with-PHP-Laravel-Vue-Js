<script setup>
import HeaderView from "./views/HeaderView.vue";
import LeftSidebar from "./views/LeftSidebar.vue";
import RightSidebar from "./views/RightSidebar.vue";
import FooterView from "./views/FooterView.vue";
</script>

<template>
  <!-- Header -->
  <HeaderView />

  <!-- Body Layout -->
  <section class="flex min-h-screen">
    <!-- Left Sidebar -->

    <LeftSidebar />

    <!-- Main Content -->

    <main class="flex-1 p-10 grid grid-cols-1 gap-8">
      <!-- <router-view /> -->
      <RouterView />
    </main>

    <!-- Right Sidebar -->
    <!-- <RightSidebar /> -->
    <RouterView name="right-sidebar" />
  </section>

  <!-- Footer -->
  <FooterView />
</template>
