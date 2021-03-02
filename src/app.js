var app = new Vue({
    el: '#app',
    data:{
        arrayRisultato: []
    },
    mounted(){
        axios
            .get('http://localhost:8888/01-03-21/php-ajax-dischi/server.php')
            .then( result => {
                this.arrayRisultato = result.data;
                console.log(this.arrayRisultato);
            })
    }
});