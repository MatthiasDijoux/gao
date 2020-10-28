import addAttribution from './addAttribution.vue';
import deleteAttribution from './deleteAttribution.vue';
import deleteOrdinateur from './deleteOrdinateur.vue';
export default {
    props: {
        ordinateur: {
            required: true
        },
        date: {
            required: true
        },
    },
    components: {
        addAttribution,
        deleteAttribution,
        deleteOrdinateur
    },
    watch: {
        ordinateur: function () {
            this.initialize();
        }
    },
    data() {
        return {
            headers: [
                {
                    text: 'Heure',
                    align: 'start',
                    value: 'horaire',
                },
                { text: 'Prenom', value: 'prenom' },
                { text: 'Nom', value: 'nom' },
            ],
            attributions: {},
            horaire: []
        }
    },

    created() {
        this.initialize()
    },
    methods: {
        initialize() {
            this.ordinateur.attributions.forEach(attributions => {
                this.attributions[attributions.horaire] = {
                    id: attributions.id,
                    nom: attributions.client.nom,
                    prenom: attributions.client.prenom
                }
            })
            this.displayHoraire()

        },
        displayHoraire() {
            this.horaire = [];

            for (let i = 0; i < 10; i++) {
                this.horaire.push({
                    index: i + 8,
                    attribution: (typeof this.attributions[i + 8] !== 'undefined') ? this.attributions[i + 8] : false
                })
            }
        },
        updateAttrib(attribution) {
            this.ordinateur.attributions.push(attribution)
            this.initialize();
        },
        deleteAttribution(horaire) {
            _.unset(this.attributions, horaire)
            this.displayHoraire();
        },
    }
}