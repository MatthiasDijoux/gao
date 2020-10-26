<template>
  <v-row>
    <v-col col="4" v-for="ordinateur in ordinateurs" :key="ordinateur.id">
      <v-card class="mx-auto" max-width="344" max-height="600">

        <v-card-title> {{ ordinateur.nom }} </v-card-title>


        <v-card-actions>
          <v-btn color="orange lighten-2" text> Explore </v-btn>

          <v-spacer></v-spacer>
        </v-card-actions>
      </v-card>
    </v-col>
  </v-row>
</template>
<script src="./Ordinateurs.js"/>