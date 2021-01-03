<template>
  <div class="container-fluid" >

    <div class="row" style="background-image: url(static/veine.png); width: 100%; height: 100%;">


    <div class="shadow col-lg-3" style="margin-bottom: 100px;border-radius: 5%;margin-right: auto; margin-left:auto; margin-top:60px; background-color: white;">


      <h2 class="d-flex justify-content-center" style="color:#FF8000; margin-top:5%;padding-top:5%; font-family : Boogaloo;"> S'INSCRIRE</h2>
      <h4 class="d-flex justify-content-center" style="color:#FF8000;  font-family : 'Montserrat Light'; font-size: 20px;"> En tant qu'Utilisateur </h4>

      <div class=" form d-flex" style="margin-top:8%;">
        <fieldset class="m-auto col-lg-8 ">

          <div class="form-group">
            <label for="prenom"> PRÉNOM :</label>
            <input type="text" name="prenom" class="form-control" style="border-radius:18px">
          </div>

          <div class="form-group">
            <label for="nom_utilisateur"> NOM :</label>
            <input type="text" name="nom_utilisateur" class="form-control " style="border-radius:18px">
          </div>

          <div class="form-group">
            <label for="mail_utilisateur"> MAIL :</label>
            <input type="email" name="mail_utilisateur" class="form-control " style="border-radius:18px">
          </div>

          <div class="form-group">
            <label for="sexe"> SEXE :</label>
            <select  class="form-control " name="sexe" style="border-radius:18px">
              <option value="">Homme</option>
              <option value="">Femme</option>
            </select>
          </div>

          <div class="form-group">
            <label for="age"> AGE :</label>
            <input type="number" name="age" class="form-control " style="border-radius:18px">
          </div>

          <div class="form-group">
            <label for="mdp_utilisateur"> MOT DE PASSE :</label>
            <input type="password" name="mdp_association" class="form-control " style="border-radius:18px">
          </div>

          <div class="form-group">
            <label for="mdp_utilisateur_confirmation"> CONFIRMATION MOT DE PASSE :</label>
            <input type="password" name="mdp_utilisateur_confirmation" class="form-control" style="border-radius:18px">
          </div>

          <div class="form-group">
            <label for="envoyer_utilisateur"></label>
            <input type="submit" name="envoyer_utilisateur" class="form-control shadow" style="background-color:#FF8000;border-radius:18px;width:50%;margin-left:25%;color:white;border:none;margin-bottom:12%;font-family : 'Montserrat'">
          </div>



        </fieldset>


      </div>

    </div>

  </div>
  </div>

</template>

<script>
export default {
  name: "InscriptionUtilisateur"
}
</script>

<style scoped>

</style>
