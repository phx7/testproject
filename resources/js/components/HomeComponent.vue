<template>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div style="text-align: center;">
                  <h1>Home</h1>
              </div>

              <div class="card-body">
                  <div style="text-align: center;">
                      Select operator:
                      <button class="btn btn-primary" @click="$router.push('addFunds/beeline')">Beeline</button>
                      <button class="btn btn-primary" @click="$router.push('addFunds/mts')">Mts</button>
                      <button class="btn btn-primary" @click="$router.push('addFunds/yota')">Yota</button>
                      <button class="btn btn-primary" @click="$router.push('addFunds/vodafone')">Vodafone</button>
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
        }
    }
</script>
