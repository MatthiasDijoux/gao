<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent max-width="600px">
      <template v-slot:activator="{ on, attrs }">
        <v-btn color="teal" icon dark v-bind="attrs" v-on="on">
          <v-icon> mdi-plus </v-icon>
        </v-btn>
      </template>
      <v-card>
        <v-card-title>
          <span class="headline">Ajouter un utilisateur</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-row>
              <v-col cols="12" sm="6" md="4">
                <v-autocomplete
                  v-model="select"
                  :loading="loading"
                  :items="clients"
                  item-text="nom"
                  item-value="id"
                  :search-input.sync="search"
                  cache-items
                  return-object
                  class="mx-4"
                  flat
                  hide-no-data
                  hide-details
                  label="Utilisateurs"
                  solo-inverted
                ></v-autocomplete>
              </v-col>
            </v-row>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="dialog = false">
            Fermer
          </v-btn>
          <v-btn color="blue darken-1" text @click="(dialog = false), ajout()">
            Ajout
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>
<script src="./addAttribution.js"/>