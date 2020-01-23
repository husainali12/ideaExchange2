<template>
 <v-toolbar dense>
    <v-toolbar-title>Idea Exchange</v-toolbar-title>

    <v-divider
      class="mx-4"
      inset
      vertical
    ></v-divider>

    <span class="subheading">My Home</span>

    <v-spacer></v-spacer>

    <v-toolbar-items class="hidden-sm-and-down">
     
      <v-btn text>
        Fourm
      </v-btn>

      <v-divider
        inset
        vertical
      ></v-divider>

       <v-btn text @click="loginPage">
        Login
      </v-btn>

      <v-divider
        inset
        vertical
      ></v-divider>

      <!-- <v-btn text>
        Music
      </v-btn>

      <v-divider
        inset
        vertical
      ></v-divider> -->
    </v-toolbar-items>

    <v-app-bar-nav-icon></v-app-bar-nav-icon>
  </v-toolbar>
 
</template>

<script>
export default {

  methods:{
    loginPage(){
      EventBus.$emit('login');
    }
  }

}
</script>

<style>

</style>