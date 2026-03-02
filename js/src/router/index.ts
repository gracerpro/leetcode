import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/minimum-deletions-to-make-string-balanced',
      name: 'minimum-deletions-to-make-string-balanced',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/MinimumDeletionsToMakeStringBalanced.vue'),
    },
    {
      path: '/middle-of-the-linked-list',
      name: 'middle-of-the-linked-list',
      component: () => import('../views/MiddleOfTheLinkedList.vue'),
    },
    {
      path: '/minimum-swaps-to-arrange-a-binary-grid',
      name: 'minimum-swaps-to-arrange-a-binary-grid',
      component: () => import('../views/1536_MinimumSwapsToArrangeABinaryGrid.vue'),
    }
  ],
})

export default router
