import { createRouter, createWebHistory } from 'vue-router'
import UserAuth from '../views/UserAuth.vue'
import PersonalArea from '../views/PersonalArea.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/login',
      name: 'auth',
      component: UserAuth
    },
    {
      path: '/dash',
      name: 'dashboard',
      component: PersonalArea
    },
    
  ]
})

export default router
