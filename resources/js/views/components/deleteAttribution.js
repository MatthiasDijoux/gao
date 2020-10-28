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
      console.log(this.attribution)
      Axios.post('api/attributions/' + this.attribution.id).then(response => {
        this.$emit('deleteAttribution', this.horaire)
      })
    }
  },
}