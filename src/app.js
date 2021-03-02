var app = new Vue({
    el: '#app',
    data:{
        arrayRisultato: [],
        arrayGenere: ['All'],
        numeroGenere: 0,
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
            
            });
    },
    methods: {

        ciao(){
            console.log(this.numeroGenere);
        }
        
    }

});