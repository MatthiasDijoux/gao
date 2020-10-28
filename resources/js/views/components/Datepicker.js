import { eventBus } from '../../eventBus.js';
export default {
    components: {
        eventBus,
    },
    data: () => ({
        date: new Date().toISOString().substr(0, 10),
        menu: false,
        modal: false,
        min: new Date().toISOString().slice(0, 10)

    }),
    methods: {
        dateChange() {
            this.$emit('date', this.date)
        }
    }
}