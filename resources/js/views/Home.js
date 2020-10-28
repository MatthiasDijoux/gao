import Ordinateurs from './components/Ordinateurs.vue';
import Datepicker from './components/Datepicker.vue';
import AddPoste from './components/addPoste.vue';
import Axios from "axios"
import { eventBus } from '../eventBus';

export default {
    components: {
        Ordinateurs,
        Datepicker,
        AddPoste
    },
    data() {
        return {
            ordinateurs: [],
            dialog: false,
            nomPoste: '',
            date: new Date().toISOString().substr(0, 10),
        }
    },
    created() {
        this.initialize()

    },
    methods: {
        initialize() {
            this.requestGet(this.date)
            eventBus.$on('ordiSupp', data => {
                _.unset(this.ordinateurs, data)
                this.requestGet(this.date)
            })
        },
        selectDate(ordinateurs) {
            this.requestGet(ordinateurs)
            this.date = ordinateurs
            eventBus.$on('ordiSupp', data => {
                _.unset(this.ordinateurs, data)
                this.requestGet(ordinateurs)
            })
        },
        requestGet(date) {
            this.ordinateurs = []
            //TODO changer post en get
            Axios.get('/api/ordinateurs', { params: { date: date } }).then(response => {
                response.data.data.forEach(_data => {
                    this.ordinateurs.push(_data)
                })
            })

        }
    }
}