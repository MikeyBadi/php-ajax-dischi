const app = new Vue({
  el:'#app',

  data:{
    apiUrl:'http://localhost:8888/php-ajax-dischi/milestone2/api.php?genChosen=',
    discs:[],
    genres:[],
    genChosen:''
  },

  mounted() {
    this.getApi()
  },
  
  methods: {
    getApi(){
      axios.get(this.apiUrl + this.genChosen)
      .then(r => {
        this.discs = r.data
        console.log(r.data);
        this.discs.forEach(disc => {
          if(!this.genres.includes(disc.genre)){
            this.genres.push(disc.genre);
            console.log(this.genres);
          }
        });
      })
    },
  },
})