import Axios from "axios"
import { eventBus } from '../../eventBus.js';
export default {
  data() {
    return {
      dialog: false,
    }
  },
  props: ['ordinateur'],
  methods: {
    deletePoste() {
      Axios.post('api/ordinateurs/' + this.ordinateur.id).then(response => {
        eventBus.$emit('ordiSupp', this.ordinateur)
      })
    }
  },
}