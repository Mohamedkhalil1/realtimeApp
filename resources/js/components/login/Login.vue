<template>
    <v-container>
      <h1>login</h1>
      <v-form
      ref="form" class="mr-4"
      @submit.prevent="login"
      >

    <v-text-field
        label="E-mail"
        required
        v-model="form.email"
    ></v-text-field>

      <v-text-field
        :counter="15"
        label="Password"
        type="password"
         v-model="form.password"
        required
      ></v-text-field>

    <v-btn class="mr-4 mb-4" color="green" type="submit">submit</v-btn>
    <v-btn class="mb-4" >clear</v-btn>

    </v-form>
    </v-container>
</template>
<script>
    export default{
      data(){
        return{
          form :{
            email:null,
            password:null
          }
        }
      },
      methods:{
        login(){
          alert('login');
          axios.post('/api/auth/login',this.form)
          .then(res=> console.log(res.data))
        }
       }
    }
 </script>

 <style>
 
 </style>   