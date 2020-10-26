
export default {
    props: ['ordinateurs'],
    data() {
        return {

        }
    },
    created() {
        this.retrieveComputers()
    },
    methods: {
        retrieveComputers(){
            console.log(this.ordinateurs)
        }
    }
}