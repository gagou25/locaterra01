<template>
  <div class="pmap">
  <h1 style="margin-top: 60px; text-align: center;font-family: Boogaloo; color: #1A8121; font-size: 50px; padding-bottom: 50px; text-transform: uppercase ">MAP</h1>
  <div  id="map" class="map col-12 col-md-10 tri d-flex justify-content-center container-fluid" style="height:600px;">
    <!-- Ici s'affichera la carte -->
  </div>

  <h2 style="text-align: center; font-size: 30px"> Trier</h2>

  <div class="tri d-flex justify-content-center container-fluid col-12">

    <div class="row">

      <div class="form-group  col-11 col-md-4" >
        <label for="rayon"> Rayon :</label>
        <select  class="form-control " name="rayon" style="border-radius:18px">
          <option value="">5 Km</option>
          <option value="">10 Km</option>
          <option value="">20 Km</option>
          <option value="">50 Km</option>
          <option value="">100 Km</option>
          <option value="">Tous</option>
        </select>
      </div>

      <div class="form-group col-11 col-md-4" style="">
        <label for="rayon"> Activité :</label>
        <select  class="form-control " name="rayon" style="border-radius:18px">
          <option value="">CleanWalk</option>
        </select>
      </div>


      <div class="form-group  col-11 col-md-4">
        <label for="date_tri"> Date :</label>
        <input type="date" name="date_tri" class="form-control " style="border-radius:18px">
      </div>

      <div class="form-group  col-11 col-md-4" style="">
        <label for="h_tri"> Heure début :</label>
        <input type="time" name="date_tri" class="form-control " style="border-radius:18px">
      </div>

      <div class="form-group  col-11 col-md-4" style="">
        <label for="h_tri"> </label>
        <input type="submit" name="date_tri" class="form-control " style="border-radius:18px;background-color:#FF8000;color:white;border:none">
      </div>


    </div>

  </div>

  <hr class=" col-9 tri d-flex justify-content-center container-fluid" style="">

  <div class="row">

    <button class="form-group col-4 col-md-2 tri d-flex justify-content-center container-fluid " type="button" style= "background-color:#07440B;border-radius:18px;color:white;border:none;margin-top:9px; font-family : 'Montserrat', sans-serif; ">
      <a href="#" style="padding-top:5px;padding-bottom:5px; color: white; text-decoration:none;"> Ajouter un évènement + </a>
    </button>

  </div>
  </div>
</template>

<script>
export default {
  name: "Carte"
}
</script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyCgUykgzKaKTD4k5XaJ4cl2sdmRvBSLXP0" type="text/javascript"></script>

<script async type="text/javascript">
// On initialise la latitude et la longitude de Paris (centre de la carte)
var lat = 48.852969;
var lon = 2.349903;
var map = null;
// Fonction d'initialisation de la carte
function initMap() {
  // Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
  map = new google.maps.Map(document.getElementById("map"), {
    // Nous plaçons le centre de la carte avec les coordonnées ci-dessus
    center: new google.maps.LatLng(lat, lon),
    // Nous définissons le zoom par défaut
    zoom: 11,
    // Nous définissons le type de carte (ici carte routière)
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    // Nous activons les options de contrôle de la carte (plan, satellite...)
    mapTypeControl: true,
    // Nous désactivons la roulette de souris
    scrollwheel: false,
    mapTypeControlOptions: {
      // Cette option sert à définir comment les options se placent
      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
    },
    // Activation des options de navigation dans la carte (zoom...)
    navigationControl: true,
    navigationControlOptions: {
      // Comment ces options doivent-elles s'afficher
      style: google.maps.NavigationControlStyle.ZOOM_PAN
    }
  });
}
window.onload = function(){
  // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
  initMap();
};
</script>

<style scoped>

</style>
