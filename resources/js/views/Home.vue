<template>
  <div>
    <v-row>
      <v-col md="2">
        <Datepicker @date="selectDate($event)" />
      </v-col>
      <v-col md="2">
        <AddPoste @sendOrdi="ordinateurs.push($event)" :date="date" />
      </v-col>
    </v-row>

    <v-container>
      <v-row>
        <v-col
          col="2"
          v-for="ordinateur in ordinateurs"
          :key="ordinateur.horaire"
        >
          <Ordinateurs :ordinateur="ordinateur" :date="date" />
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>
<script src="./Home.js" />