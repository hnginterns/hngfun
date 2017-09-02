var vm = new Vue({
  http: {
    emulateJSON: true,
    emulateHTTP: true,
  },
  el: '#app',
  data: {
    pairs: {},
    higestBuy: '',
    higestSell: ''
  },
  ready: function() {
      this.$http.get('http://pixis.space/coinman',{}, {credentials:false},
      ).then(response => {
        this.pairs = response.data;
      });


    setInterval(function() {
      $.http({
        url: 'http://pixis.space/coinman?type=catchData',
        method: 'GET'
      }).then(function(response) {
        //this.pairs = response.data;
      });
    }, 1000);
  }
});
