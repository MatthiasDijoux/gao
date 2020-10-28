import Axios from "axios"

export default {
  data() {
    return {
      dialog: false,
    }
  },
  props: ['attribution', 'horaire'],
  methods: {
    deletePoste() {
      Axios.post('api/attributions/' + this.attribution).then(response => {
        this.$emit('deleteAttribution', this.horaire)
      })
    }
  },
}