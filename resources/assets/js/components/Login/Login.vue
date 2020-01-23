<template>
  <v-parallax src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
   height="750">
   <v-row
      align="center"
      justify="center"
    >
      <v-col class="text-center" cols="4">
        
        <v-card elevation="6" >
          <v-card  >
                         <h1>Login</h1>
                     </v-card>

     <v-col>
                     

        <v-form
    v-model="valid"
    lazy-validation
  >
    
    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="E-mail"
      required
    ></v-text-field>
     <v-text-field
            :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
            :type="show ? 'text' : 'password'"
            name="password"
            label="Password"
            class="input-group--focused"
            @click:append="show = !show"
          ></v-text-field>



    <v-btn
      color="success"
      class="mr-4"
      @click="validate"
    >
      Validate
    </v-btn>
  </v-form>
     </v-col>
             
          </v-card>
         
      </v-col>
    </v-row>
  </v-parallax>
</template>

<script>
export default {
data () {
      return {
        show: false,
      }
    },
}
</script>

<style >

</style>