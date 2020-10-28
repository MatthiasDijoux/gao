import Axios from "axios"

export default {
    props: ['date'],
    data() {
        return {
            dialog: false,
            nomPoste: '',

        }
    },
    methods: {
        addPoste() {
            Axios.post('/api/ordinateurs', {
                nom: this.nomPoste,
                date: this.date
            }).then(response => {
                this.$emit('sendOrdi', response.data.data)
            }).catch(err => {
                console.log(err)
            })
        }

    }
}