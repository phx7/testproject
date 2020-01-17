<template>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <center>
                  <h1>Home</h1>
              </center>

              <div class="card-body">
                  <center>
                      Select operator:
                      <button @click="$router.push('addFunds/beeline')">Beeline</button>
                      <button @click="$router.push('addFunds/mts')">Mts</button>
                      <button @click="$router.push('addFunds/yota')">Yota</button>
                      <button @click="$router.push('addFunds/vodafone')">Vodafone</button>
                  </center>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
