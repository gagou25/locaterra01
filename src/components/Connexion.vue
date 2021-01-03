<template>
  <div class="container-fluid">
    <div class="row" style="background-image: url(static/veine.png); width: 100%; height: 100%;">


      <div class="shadow col-lg-3" style="margin-bottom: 100px; border-radius: 5%;margin-right: auto; margin-left:auto; margin-top:60px; background-color: white;">


        <h2 class="d-flex justify-content-center" style="color:#FF8000; margin-top:5%;padding-top:5%; font-family : Boogaloo;"> SE CONNECTER</h2>

        <div class=" form d-flex" style="margin-top:8%;">
          <fieldset class="m-auto col-lg-8 ">


            <div class="form-group">
              <label for="mail_connexion"> MAIL :</label>
              <input type="email" name="mail_connexion" class="form-control " style="border-radius:18px">
            </div>

            <div class="form-group">
              <label for="mdp_connexion"> MOT DE PASSE :</label>
              <input type="password" name="mdp_connexion" class="form-control " style="border-radius:18px">
            </div>

            <p style="font-family: 'Montserrat'"> Mot de passe oublié ? <a href="#"> Cliquez ici !</a></p>

            <div class="form-group">
              <label for="envoyer_connexion"></label>
              <input type="submit" name="envoyer_connexion" class="form-control shadow" style="text-transform: uppercase;background-color:#FF8000;border-radius:18px;width:50%;margin-left:25%;color:white;border:none;margin-bottom:12%;font-family : 'Montserrat'">
            </div>



          </fieldset>


        </div>

      </div>

    </div>

  </div>

</template>

<script>
export default {
name: "Connexion"
}
</script>

<style scoped>

</style>
