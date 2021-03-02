var app = new Vue({
    el: '#app',
    data:{
        arrayRisultato: []
    },
    mounted(){
        axios
            .get('server.php')
            .then( result => {
                this.arrayRisultato = result.data;
                console.log(this.arrayRisultato);
            })
    }
});