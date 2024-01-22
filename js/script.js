const { createApp } = Vue;
createApp({
  data() {
    return {
      apiUrl: "server.php",
      records: [],
      title: "",
      author: "",
      poster: "",
      detailRecord: {},
      isShowModal: false,
    };
  },
  methods: {
    getApiData() {
      axios.get(this.apiUrl).then((result) => {
        this.records = result.data;
      });
    },
    sendNewRecord() {
      const data = new FormData();
      data.append("title", this.title);
      data.append("author", this.author);
      data.append("poster", this.poster);

      axios
        .post(this.apiUrl, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((result) => {
          this.records = result.data;
        });
    },
    showDetail(index) {
      this.detailRecord = {};
      this.isShowModal = true;
      const data = new FormData();
      data.append("itemIndex", index);

      axios
        .post(this.apiUrl, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((result) => {
          this.detailRecord = result.data;
        });
    },
  },
  mounted() {
    this.getApiData();
  },
}).mount("#app");
