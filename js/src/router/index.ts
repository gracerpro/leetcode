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
    },
    {
      path: '/minimum-number-of-flips-to-make-the-binary-string-alternating',
      name: 'minimum-number-of-flips-to-make-the-binary-string-alternating',
      component: () =>
        import('../views/1888_MinimumNumberOfFlipsToMakeTheBinaryStringAlternating.vue'),
    },
    {
      path: '/palindrome-number',
      name: 'palindrome-number',
      component: () => import('../views/9_PalindromeNumber.vue'),
    },
    {
      path: '/minimum-number-of-seconds-to-make-mountain-height-zero',
      name: 'minimum-number-of-seconds-to-make-mountain-height-zero',
      component: () => import('../views/3296_MinimumNumberOfSecondsToMakeMountainHeightZero.vue'),
    },
    {
      path: '/check-if-strings-can-be-made-equal-with-operations-ii',
      name: 'check-if-strings-can-be-made-equal-with-operations-ii',
      component: () => import('../views/2840_CheckIfStringsCanBeMadeEqualWithOperationsII.vue'),
    },
  ],
})

export default router
