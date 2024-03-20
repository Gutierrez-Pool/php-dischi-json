const { createApp } = Vue;

createApp({
    data() {
        return {
            dischiList: [],
            discoIndex: [],
        }
    },

    methods: {

        discInfo(index) { 
            axios.get("./server.php").then(res => {
                console.log(res.data[index]);
    
                this.discoIndex = res.data[index];
            })
        }

    },

    mounted() {

        axios.get("./server.php").then(res => {
            console.log(res.data);

            this.dischiList = res.data;
        })

    },
}).mount('#app');