<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"></div>

                    <div class="card-body">


                          <p :style="{'text-decoration' : decoration}">
                            Nutflux
                          </p>
                          <p>

                            <input class="" type ="text" v-model ="name" placeholder="e-mail">
                            <p>
                              Bonjour {{name}}!
                            </p>
                              </p>

                    </div>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      //mounted est créé lorsque le composant View l'est. console point log permet d'afficher dans la console.
        mounted() {
            console.log('Component mounted.')
        },

        data(){
          return {
            name : "Dan"


        }

      }

}
</script>

<link src="../../../public/css/style.css" ref ="stylesheet" >
