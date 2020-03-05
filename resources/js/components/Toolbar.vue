<template>
  <v-card
    color="grey lighten-4"
    flat
    tile
  >
    <v-toolbar dense>
      <!--<v-app-bar-nav-icon></v-app-bar-nav-icon> -->
      <v-toolbar-title>Forum</v-toolbar-title>
      <v-spacer></v-spacer>
      <div class="hidden-sm-and-down">
        
          <router-link to="/fourm">
            <v-btn class="ma-2">Forum</v-btn>
          </router-link>
          <router-link to="/question">
              <v-btn class="ma-2">Ask Question</v-btn>
          </router-link>
          <router-link to="/category">
              <v-btn class="ma-2">Category</v-btn>
          </router-link>
          
          <router-link to="/login">
            <v-btn class="ma-2">Login</v-btn>
          </router-link>
       
      </div>

    </v-toolbar>
  </v-card>
</template>
<script>
    export default{

    }
 </script>

 <style>
 
 </style>   