import Vue from 'vue'
import Router from 'vue-router'

import Accueil from '@/components/Accueil'

import Moncompte from '@/components/Moncompte'

import Carte from "../components/Carte";

import Connexion from "../components/Connexion";

import InscriptionAssos from "../components/InscriptionAssos";
import InscriptionUtilisateur from "../components/InscriptionUtilisateur";
import InscriChoix from "../components/InscriChoix";

import PageEvent from "../components/PageEvent";

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: `Accueil`,
      component: Accueil
    },
    {
      path: '/Moncompte',
      name: `Moncompte`,
      component: Moncompte
    },
    {
      path: '/Carte',
      name: `Carte`,
      component: Carte,
    },
    {
      path: '/Connexion',
      name: `Connexion`,
      component: Connexion,
    },
    {
      path: '/InscriptionAssos',
      name: `InscriptionAssos`,
      component: InscriptionAssos,
    },
    {
      path: '/InscriptionUtilisateur',
      name: `InscriptionUtilisateur`,
      component: InscriptionUtilisateur,
    },
    {
      path: '/InscriChoix',
      name: `InscriChoix`,
      component: InscriChoix,
    },
    {
      path: '/PageEvent',
      name: `PageEvent`,
      component: PageEvent,
    },
  ]
})
