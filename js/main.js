const { createApp } = Vue;

createApp({
    data() {
        return {
            dischiList: [],
        }
    },

    methods: {



    },

    mounted() {

        axios.get("./server.php").then(res => {
            console.log(res.data);

            this.dischiList = res.data;
        })

    },
}).mount('#app');