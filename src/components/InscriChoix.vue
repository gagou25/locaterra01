<template>
  <div>
    <div style="width: 100%;top:0;left: 0;font-family: 'Montserrat', sans-serif;font-size: 16px;
    background-image: url(static/image_choice.png);
    background-repeat: no-repeat;
    background-size: 100%;">
>
    <p class="text-center text-light p-5" style="margin-top: 150px;">
      Vous êtes ?
    </p>

    <router-link to="/InscriptionAssos" class="nav-link text-center" style="font-weight: bold; color: white; ">ASSOCIATION</router-link>
    <hr>
    <router-link to="/InscriptionUtilisateur" class="nav-link text-center" style="font-weight: bold; color: white;padding-bottom: 150px;">ACTIF ÉCOLOGIQUE</router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: 'InscriChoix'
}
</script>
