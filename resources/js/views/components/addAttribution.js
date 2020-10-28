import Axios from "axios"

export default {
    props: ['horaire', 'ordinateur', 'date'],
    data: () => ({
        dialog: false,
        clients: [],
        loading: false,
        search: null,
        select: [],
    }),
    watch: {
        search(val) {

            if (val && val.length > 3) {
                this.loading = true

                Axios.get('api/clients/search', { query: val }).then(response => {
                    response.data.forEach(data => {
                        this.loading = false
                        let NomPrenom = data.nom + ' ' + data.prenom
                        data.nom = NomPrenom
                        this.clients.push(data)
                    })
                })
            }
        },
    },
    methods: {
        ajout() {
            Axios.post('api/attributions', {
                horaire: this.horaire,
                client: this.select.id,
                ordinateur: this.ordinateur.id,
                date: this.date
            }).then(response => {
                this.$emit('attrib', response.data.data)
            })
        }
    }
}