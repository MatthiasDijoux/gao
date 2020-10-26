import Ordinateurs from './components/Ordinateurs.vue';
import Axios from "axios"

export default {
    components: {
        Ordinateurs,
    },
    data() {
        return {
            ordinateurs: [],
        }
    },
    created() {
        this.initialize()
    },
    methods: {
        initialize() {
            Axios.get('/api/ordinateurs').then(response => {
                console.log(response.data.data)
                response.data.data.forEach(_data=>{
                    this.ordinateurs.push(_data)
                })
            })
        }
    }
}