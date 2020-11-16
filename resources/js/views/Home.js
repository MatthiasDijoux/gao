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
            pagination: {
                page: 1,
                visible: 3,
                pageCount: 0,
            },
        }
    },
    created() {
        this.initialize()
        eventBus.$on('ordiSupp', data => {
            const index = this.ordinateurs.indexOf(data);
            this.ordinateurs.splice(index, 1)
        })
    },
    methods: {
        initialize() {
            this.requestGet(1)
        },
        selectDate(ordinateurs) {
            this.requestGet(1)
            this.date = ordinateurs

        },
        requestGet(page) {
            this.ordinateurs = []
            Axios.get('/api/ordinateurs', { params: { date: this.date, page: page } }).then(({ data }) => {

                data.data.forEach(_data => {
                    this.ordinateurs.push(_data)
                })
                this.pagination.pageCount = data.meta.last_page
            })
        },
    }
}