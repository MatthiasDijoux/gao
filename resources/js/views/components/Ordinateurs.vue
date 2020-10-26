<template>
  <v-container>
    <v-row>
      <v-col col="2" v-for="ordinateur in ordinateurs" :key="ordinateur.id">
        <v-card class="mx-auto" max-width="344" max-height="600">
          <v-card-title> {{ ordinateur.nom }} </v-card-title>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<script src="./Ordinateurs.js"/>