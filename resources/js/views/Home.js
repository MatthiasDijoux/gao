import Ordinateurs from './components/Ordinateurs.vue';
import Axios from "axios"

export default {
    components: {
        Ordinateurs,
    },
    data() {
        return {
            ordinateurs: [],
            dialog: false,
            nomPoste: '',
        }
    },
    mounted() {
        this.initialize()
    },
    methods: {
        initialize() {
            Axios.get('/api/ordinateurs').then(response => {
                response.data.forEach(_data => {
                    this.ordinateurs.push(_data)
                })
            })
        },
        addPoste() {
            Axios.post('/api/ordinateurs', {
                nom: this.nomPoste
            }).then(response => {
                this.ordinateurs.push(response.data.data)
            }).catch(err => {
                console.log(err)
            })
        }
    }
}