import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import AboutView from "../views/AboutView.vue";
import ContactView from "../views/ContactView.vue";
import BlogView from "../views/BlogView.vue";
import RightSidebar from "../views/RightSidebar.vue";
import SingleBlog from "../views/SingleBlog.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  //   Redirection
  //   {
  //     path: "/home",
  //     redirect: "/",
  //   },
  {
    path: "/about",
    name: "about",
    component: AboutView,
  },
  {
    path: "/contactpage",
    name: "contact",
    component: ContactView,
  },
  //   {
  //     path: "/blog",
  //     name: "blog",
  //     component: BlogView,
  //   },
  {
    path: "/blog",
    name: "blog",
    components: {
      default: BlogView,
      "right-sidebar": RightSidebar,
    },
  },
  {
    path: "/blog/tags/:tag",
    name: "tag",
    components: {
      default: BlogView,
      "right-sidebar": RightSidebar,
    },
  },

  //   {
  //     path: "/blog",
  //     name: "blog",
  //     component: BlogView,
  //   },
  //   Dynamic Route
  {
    path: "/blog/:id",
    name: "single-blog",
    component: SingleBlog,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes: routes,
});

export default router;
