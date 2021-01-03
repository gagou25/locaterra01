<template>
  <div class="container-fluid" >
   <div style="width: 100%;position: absolute; top: 0; left: 0; z-index: -1;font-family: 'Montserrat', sans-serif;font-size: 16px;
    background-image: url(static/image_main.png);
    background-repeat: no-repeat;
    background-size: 100%;
    height: 100%;">
     <h2 class="offset-3 mt-5" style="font-family: Boogaloo; color: white; font-size: 40px; padding-bottom: 50px; text-transform: uppercase; margin-top: 300px; margin-bottom: 100px;padding-top: 200px;  ">TROUVEZ L'EVENEMENT ECOLOGIQUE QUI VOUS CONVIENT.</h2>
     <div class="offset-7" style="padding-bottom: 400px;">
       <button class="rounded mx-auto" style="border:none;margin-bottom: 150px; background-color: #FF8000; border-color: white; border-width: 3px;"> <a class="m-3" href="#" style="font-family: Montserrat,sans-serif; font-size: 24px; color: white; text-transform: uppercase;font-weight: bold">En savoir plus</a>
       </button>
     </div>
   </div>



    <div class="row" style="margin-top: 700px;">
      <h1 class="offset-1 " style="font-family: 'Boogaloo', sans-serif; color: black; font-size: 50px; padding-bottom: 50px; margin-top: 50px;  ">QUE PROPOSE LOCA'TERRA ?</h1>
    </div>
    <div class="d-flex">
      <div class="col-4 my-md-auto my-sm-auto">
        <img src="static/planete.png" class=" col-12 img-responsive">
      </div>
      <div class="col-7  my-auto">
        <div class="card shadow rounded mb-5">
          <div class="card-body">
            <h3 class="card-title p-top-2" style="font-family: Boogaloo; color: #1A8121; font-size: 50px;">Pour les actifs de l'écologie :</h3>
            <p class="card-texte" style="font-family: Montserrat; font-size: 24px;">
              Loca'Terra permet aux valeureux lutteurs écologiques de trouver en quelques clics l'évènement qui leur convient ! Rendez-vous sur la page La carte Loca'Terra, qui recense toutes les activités organisées par les associations de Bourgogne Franche-Comté
            </p>
          </div>
        </div>
      </div>
    </div>




    <div class="row" style="background-image: url(static/veine.png); width: 100%; height: 100%;">
      <h1 class="offset-1 mt-5" style="font-family: Boogaloo; color: #1A8121; font-size: 50px; padding-bottom: 50px; text-transform: uppercase  ">événements à venir</h1>
      <div class="card offset-1 col-10 mb-5 mt-3 shadow rounded" style="margin-bottom: 60px">
        <div class="card-body">
          <div class="d-flex">
            <div class=" col-4 img-responsive">
              <img src="static/megots.jpg" style="width: 100%;height: 100%;">
            </div>
            <div col-6>
              <h3 class="card-title p-top-2 " style="font-family: Boogaloo; color: #1A8121; font-size: 50px;">Ramassage de mégot</h3>
              <div class="card-header m-0 p-0" style="background-color: white">
                <p style="color: #9A9A9A; font-family: Montserrat, sans-serif; font-size:20px; background-color: white;">Besançon   le 21/01/2021, à 14H</p>
              </div>
              <p class="card-texte" style="font-family: Montserrat; font-size: 24px;">
                Green Peace propose de ramasser des mégots à Besançon.
              </p>
            </div>
          </div>
          <div class="card-footer d-flex" style="background-color: white">
            <button class="rounded mx-auto" style="background-color: white; border-color: #FF8000; border-width: 3px;"> <a class="m-3" href="#" style="font-family: Montserrat,sans-serif; font-size: 24px; color: #FF8000; text-transform: uppercase;font-weight: bold">J'y Participe</a>
            </button>
            <button class="rounded mx-auto" style="background-color: #FF8000; border-color: white; border-width: 3px;"> <a class="m-3" href="#" style="font-family: Montserrat,sans-serif; font-size: 24px; color: white; text-transform: uppercase;font-weight: bold">Voir événement</a>
            </button>
          </div>


        </div>

      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Accueil',
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
