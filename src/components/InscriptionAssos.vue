<template xmlns="http://www.w3.org/1999/html">
  <div class="container-fluid" >
    <div class="row" style="background-image: url(static/veine.png); width: 100%; height: 100%;">
    <div class="shadow col-lg-3" style="margin-bottom:100px;border-radius: 5%;margin-right: auto; margin-left:auto; margin-top:60px; background-color: white;">


      <h2 class="d-flex justify-content-center" style="color:#FF8000; margin-top:5%;padding-top:5%; font-family : Boogaloo;"> S'INSCRIRE</h2>
      <h4 class="d-flex justify-content-center" style="color:#FF8000;  font-family : 'Montserrat Light'; font-size: 20px;"> En tant qu'Association </h4>

      <div class=" form d-flex" style="margin-top:8%;">
        <fieldset class="m-auto col-lg-8 ">

          <div class="form-group">
            <label> NOM DE L'ASSOCIATION :</label>
            <input
              v-model="association.nom"
              type="text" class="form-control"
              maxlength="32" required
              style="border-radius:18px"/>
          </div>

          <div class="form-group">
            <label> ADRESSE DE L'ASSOCIATION :</label>
            <input
              v-model="association.adresse"
              type="text" class="form-control"
              maxlength="32" required
              style="border-radius:18px" />
          </div>

          <div class="form-group">
            <label> MAIL :</label>
            <input
              v-model="association.mail"
              type="email" class="form-control"
              maxlength="32" required
              style="border-radius:18px" />
          </div>

          <div class="form-group">
            <label> TELEPHONE :</label>
            <input
              v-model="association.tel"
              type="tel" class="form-control"
              maxlength="32" required
              style="border-radius:18px" >
          </div>

          <div class="form-group">
            <label> SECTEUR D'ACTIVITÉ :</label>
            <input
              v-model="association.secteur"
              type="text" class="form-control"
              maxlength="32" required
              style="border-radius:18px" >
          </div>

          <div class="form-group">
            <label> DESCRIPTION :</label>
            <input
              v-model="association.description"
              type="text" class="form-control"
              maxlength="255" required
              style="border-radius:18px" >
          </div>

          <div class="form-group">
            <label> LOGO :</label>
            <input
              type="file"
              name="logo"
              class="form-control" style="border-radius:18px">
          </div>

          <div class="form-group">
            <label> MOT DE PASSE :</label>
            <input
              v-model="association.mdp"
              type="password" class="form-control"
              maxlength="255" required
              style="border-radius:18px" >
          </div>

          <div class="form-group">
            <label> CONFIRMATION DU MOT DE PASSE :</label>
            <input
              v-model="association.mdp"
              type="password" class="form-control"
              placeholder="Mot de passe de l'Association"
              maxlength="255" required
              style="border-radius:18px" >
          </div>


          <div class="form-group">
            <input type="submit" name="envoyer_association" class="form-control shadow" style="background-color:#FF8000;border-radius:18px;width:50%;margin-left:25%;color:white;border:none;margin-bottom:12%;font-family : 'Montserrat'">
          </div>
        </fieldset>
      </div>

    </div>

  </div>
  </div>
</template>

<script>
  import ajaxService from '@/services/ajaxService'

  export default {
  name: 'InscriptionAssos',
  data () {
  return {
  association :{
  nom : null,
  adresse : null,
  mail : null,
  tel : null,
  secteur : null,
  description : null,
  logo : null,
  mdp : null
},
  listeAsso : []
}
},

  created(){

  ajaxService. getListe("listeAsso")
  .then(promise => {
  this.listeAsso = promise;
  console.log("Liste des Associations ",this.listeAsso);
})
  .catch(error => console.log(error))
},

  methods : {

  previewImage: function(event) {
  // Au chargement d'un nouvelle image
  // On met à jour l'image du villageois
  this.association.image = event.target.files[0];

  // Reference à l'origine de l'évenement
  var input = event.target;
  // Récupération d'un ou de champs file existants
  // et renseignés
  if (input.files && input.files[0]) {

  // Création d'un objet FileReader
  // fichier en lecture
  var reader = new FileReader();

  // Création d'un callback sur event onload
  reader.onload = (e) => {
  // Lecture de l'image en base64
  // pour la charger dans imageData
  this.imageData = e.target.result;
}
  // Render de l'image en tant qu'URL
  // Format base64 pour affichage
  reader.readAsDataURL(input.files[0]);
}
},

  submit: function(){
  // Objet FormData pour paramètres de l'association
  let params = new FormData();
  // Les paramètres à passer au back-end
  params.append('nom',               this.association.nom);
  params.append('adresse',           this.association.adresse);
  params.append('mail',              this.association.mail);
  params.append('tel',               this.association.tel);
  params.append('secteur',           this.association.secteur);
  params.append('description',       this.association.description);
  params.append('logo',              this.association.logo);
  params.append('mdp',               this.association.mdp);

  ajaxService.maj('createAsso', params)
  .then(promise =>{
  console.log("Creation association : ", promise);
  // Redirection sur la liste des associations
  this.$router.push("/associations");
})
  .catch(error => console.log(error))
}
}

}
</script>

<style scoped>

</style>
