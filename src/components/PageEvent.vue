<template>
  <div class="container" style="width: 100%;">
    <div class="row">
      <div class="d-flex my-5" >

        <div class=" col-5 img-responsive">
          <img src="static/megots.jpg" style="width: 100%;height: 100%;">
          <p v-model="NbrParticipant" style="font-size: 24px">{{NbrParticipant}}</p>
        </div>

        <div class="col-7" >
          <h3 v-model="NomEvenement" class="p-top-2 " style="font-family: Boogaloo; color: #1A8121; font-size: 50px;">Ramassage de mégot</h3>
          <div class="m-0 p-0" style="background-color: white">
            <p v-model="AssociationEvenementDate" style="color: #9A9A9A; font-family: Montserrat, sans-serif; font-size:20px; background-color: white;">{{AssociationEvenementDate}}</p>
            <br/>
            <p style="color: #9A9A9A; font-family: Montserrat, sans-serif; font-size:20px; background-color: white;">Organisé par : <p v-model="Association" style="color: black">{{Association}}</p>
          </div>
          <p v-model="Resume" style="font-family: Montserrat; font-size: 24px;">
            {{Resume}}
          </p>
        </div>
      </div>
      <div class="mx-auto mb-5">
        <button v-if="" class="rounded mt-5 mx-auto" style="background-color: white; border-color: #FF8000; border-width: 3px;"> <a class="m-3" href="#" style="font-family: Montserrat,sans-serif; font-size: 24px; color: #FF8000; text-transform: uppercase;font-weight: bold">Je Participe !</a>
        </button>
        <button v-if="" class="rounded mt-5 mx-auto" style="background-color: white; border-color: #FF8000; border-width: 3px;"> <a class="m-3" href="#" style="font-family: Montserrat,sans-serif; font-size: 24px; color: #FF8000; text-transform: uppercase;font-weight: bold">Ne plus participer !</a>
        </button>

      </div>

    </div>
  </div>
</template>

<script>
export default {
name: "Evenement"
}
</script>

<style scoped>

</style>
