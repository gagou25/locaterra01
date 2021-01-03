<template>
  <div class="container-fluid" >
    <div class="row">
      <h1 class="offset-1 " style="font-family: Boogaloo; color: #1A8121; font-size: 50px; padding-bottom: 50px;margin-top: 50px;   ">MON COMPTE</h1>
    </div>
    <div class="card offset-1 col-10 mb-5 mt-3 shadow" style="border-radius: 30px;">
      <div class="card-body">
        <div class="row" style="position: relative">
          <div class=" img-responsive col-2" style="z-index: 1">
            <img src="static/greenpeace.jpg" style="width: 250px;height: 250px; border-radius: 25%;border: 1px solid #07440B; ">
          </div>
          <div class="col-12" style="position: absolute; z-index: 0;">
            <h3 class="offset-2 col-9" style="text-align: center;border-radius: 30px;font-family: Boogaloo; color: white; background-color: #1A8121; font-size: 50px;padding: 0 50px;">Green Peace</h3>
            <h3 class=" offset-2 col-9" style="text-align: center;border-radius: 30px;font-family: Boogaloo; color: #1A8121; background-color: white; font-size: 50px;padding: 0 50px;">Association</h3>
          </div>
          <div class="" >
            <div class="card-header d-flex" style="background-color: white">
              <div class="col-7">
                <h3 class="card-title col-6" style="font-family: Boogaloo; color: #1A8121; font-size: 50px;">Présentation</h3>
              </div>
              <div class="col-5">
                <button class="rounded " style="background-color: #FF8000; border-color: white; border-width: 3px;"> <a class="m-3" href="#" style="font-family: Montserrat,sans-serif; font-size: 24px; color: white; text-transform: uppercase;font-weight: bold">Paramètres</a></button>
              </div>
            </div>
            <p class="card-texte col-12" style="font-family: Montserrat; font-size: 24px;">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Moncompte"
}
</script>

<style scoped>

</style>
