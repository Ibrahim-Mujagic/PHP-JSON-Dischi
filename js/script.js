const { createApp } = Vue;
createApp({
  data() {
    return {
      apiUrl: "server.php",
      records: [],
      title: "",
      author: "",
      poster: "",
    };
  },
  methods: {
    getApiData() {
      axios.get(this.apiUrl).then((result) => {
        this.records = result.data;
      });
    },
    sendNewRecord() {},
  },
  mounted() {
    this.getApiData();
  },
}).mount("#app");
