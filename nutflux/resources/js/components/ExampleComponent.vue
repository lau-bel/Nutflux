<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        Bonjour  {{name}}

                          <p :style="{'text-decoration' : decoration}">
                            Nutflux
                          </p>


                    </div>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data(){
          return {
            name : "Laura"


        }

      }

}
</script>

<style>
body {
  background-color : black;
}
.card-body {
  color : #FCBAA5;
  font-family: Allerta Stencil;

}
</style>
