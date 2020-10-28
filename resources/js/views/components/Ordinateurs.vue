<template>
  <v-card class="mx-auto" width="500">
    <v-card-title>{{ ordinateur.nom }} </v-card-title>
    <v-card-text>
      <v-list-item three-line>
        <v-list-item-content>
          <v-row>
            <v-col md="4">Heure</v-col>
            <v-col md="4" class="text-center"> Nom </v-col>
            <v-col md="4" class="text-right">Actions</v-col>
          </v-row>
          <div v-for="(horaires, i) in horaire" :key="i">
            <v-row>
              <v-col md="2"> {{ horaires.index }}</v-col>
              <v-col md="8" class="text-center"
                >{{ horaires.attribution.prenom }}
                {{ horaires.attribution.nom }}</v-col
              >
              <v-col md="">
                <addAttribution
                  v-if="!horaire.attribution"
                  :horaire="horaires.index"
                  @addAttribution="addAttribution"
                  :ordinateur="ordinateur"
                  :date="date"
                  @attrib="updateAttrib($event, i)"
                />
              </v-col>
              <v-col md="1">
                <deleteAttribution
                  v-if="horaires.id"
                  :attribution="horaires.id"
                  :horaire="horaires"
                  @deleteAttribution="deleteAttribution"
                />
              </v-col>
            </v-row>
          </div>
        </v-list-item-content>
      </v-list-item>
    </v-card-text>
  </v-card>
</template>
<script src="./Ordinateurs.js"/>