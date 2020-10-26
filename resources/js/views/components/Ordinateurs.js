
export default {
    props: ['ordinateurs'],
    data() {
        return {
            attributions: [
                {
                    key: '',
                    value: {}
                }
            ],
            ordi:[]
        }
    },
    created() {
        this.initialize()
    },
    methods: {
        initialize() {
            console.log(this.ordinateurs)
        }
    }
}