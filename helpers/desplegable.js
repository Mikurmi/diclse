const menu = document.getElementById('menu');
const topnav = document.getElementById('topnav');
let cerrarventana = 0;

menu.addEventListener('click', usarDespegable);

function usarDespegable(event) {

    cerrarventana++;

    if(cerrarventana == 2){
        cerrarventana = 0;

        topnav.style.height = '50px';

    }else{
        if( window.innerWidth > 1080 ){

            topnav.style.height = '600px';

        }else if( window.innerWidth > 575){

            topnav.style.height = '1330px';

        }else{

            topnav.style.height = '2050px';

        }
    }
    
    
    
}