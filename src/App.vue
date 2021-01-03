<template>
  <div id="app">
    <div class="container-fluid" style=";font-family: 'Montserrat', sans-serif;font-size: 16px;
    background-image: url(static/image_main.png);
    background-repeat: no-repeat;
    background-size: 100%;
    height: 100%;">
      <nav class="navbar navbar-expand-lg navbar-danger menu" style=";font-family: 'Montserrat', sans-serif;font-size: 16px;">
        <router-link to="/" class="navbar-brand">
          <img src="static/logo.png" style="height: 100px" alt="logo de locaterra">
        </router-link>

        <button class="navbar-toggler"
                type="button" data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="true"
                aria-label="Toggle navigation">
                    <span style="color: black" class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1"
                             width="24"
                             height="24"
                             viewBox="0 0 24 24"
                             fill="black">
                            <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
                        </svg>
                    </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto" style=" font-weight: bold;">
            <li class="nav-item px-3 text-center" style="margin-right: 10px;">
              <router-link to="/Carte" class="nav-link" style="color: white;">LA CARTE</router-link>
            </li>
            <li class="nav-item px-3 text-center" style="margin-right: 10px;">
              <router-link to="/PageEvent" class="nav-link" style="color: white;">ÉVÉNEMENTS</router-link>
            </li>
            <li class="nav-item px-3 text-center" style="margin-right: 10px;">
              <router-link to="/" class="nav-link" style="color: white;">À PROPOS</router-link>
            </li>
            <li class="nav-item px-3 text-center" style="background-color: white; border-radius: 30px;margin-right: 10px;">
              <router-link to="/Connexion" class="nav-link" style="color: #07440B;">SE CONNECTER</router-link>
            </li>
            <li class="nav-item px-3 text-center" style="margin-right: 10px;border-radius: 30px; border: solid white 1px;">
              <router-link to="/InscriChoix" class="nav-link" style="color: white;">M'INSCRIRE</router-link>
            </li>

          </ul>

        </div>
      </nav>

    </div>

    <router-view/>
    <footer class="text-left text-lg-start text-light" style="background-color: #07440B; margin-bottom: 0">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">LOCATERRA</h5>

            <img src="static/logo_footer.png" style="height: 100px" alt="">
          </div>
          <!--Grid column-->
          <span class="vertical-line text-light"></span>
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0 text-light">NAVIGATION</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-light">ACCUEIL</a>
              </li>
              <li>
                <a href="#!" class="text-light">LA CARTE</a>
              </li>
              <li>
                <a href="#!" class="text-light">ÉVÈNEMENTS</a>
              </li>
              <li>
                <a href="#!" class="text-light">À PROPOS</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
          <span class="vertical-line text-light"></span>
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0 text-light">NAVIGATION</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-light">ACCUEIL</a>
              </li>
              <li>
                <a href="#!" class="text-light">LA CARTE</a>
              </li>
              <li>
                <a href="#!" class="text-light">ÉVÈNEMENTS</a>
              </li>
              <li>
                <a href="#!" class="text-light">À PROPOS</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright
      </div>
      <!-- Copyright -->
    </footer>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
#app {

}
</style>
