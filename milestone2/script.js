const app = new Vue({
  el:'#app',

  data:{
    apiUrl:'http://localhost:8888/php-ajax-dischi/milestone2/api.php',
    discs:[],
  },

  mounted() {
    this.getApi()
  },

  methods: {
    getApi(){
      axios.get(this.apiUrl)
      .then(r => {
        this.discs = r.data
        console.log(r.data);
      })
    }
  },
})