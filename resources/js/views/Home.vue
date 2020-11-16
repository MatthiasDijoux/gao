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

      <v-row>
        <v-col
          md="4"
          v-for="ordinateur in ordinateurs"
          :key="ordinateur.horaire"
        >
          <Ordinateurs :ordinateur="ordinateur" :date="date" />
        </v-col>
      </v-row>
    <v-pagination
      :length="pagination.pageCount"
      color="teal lighten-2"
      v-model="pagination.page"
      @input="requestGet"
      circle
    ></v-pagination>
  </div>
</template>
<script src="./Home.js" />