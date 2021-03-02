var app = new Vue({
    el: '#app',
    data:{
        arrayRisultato: [],
        arrayGenere: ['All'],
        numeroGenere: 0,
        prova: 0,
        altroArray: []
    },
    mounted(){
        axios
            .get('server.php')
            .then( result => {

                this.arrayRisultato = result.data;
                this.numeroGenere = 'All'; 

                this.arrayRisultato.forEach(element => {
                    
                    if (!this.arrayGenere.includes(element.genere)) {
                        
                        this.arrayGenere.push(element.genere);
                        
                    }

                });

                this.arrayGenere.sort();
            
            });

       
    },


});