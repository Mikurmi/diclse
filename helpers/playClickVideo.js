//Variables
let videos = document.getElementsByTagName('video');

//Funciones
const incioVideo = (event) => {
    event.target.play();
    event.target.loop = true;
}

const pauseVideo = (event) => {
    event.target.pause();
    event.target.loop = false;
}

const reenviar = (event) => {
    let id = event.target.id;
    window.location.href = 'signo.php?signo=' + id;
}


//Codigo
for(let i = 0; i < videos.length; i++){
    videos[i].addEventListener("mouseenter", incioVideo);
    videos[i].addEventListener("mouseleave", pauseVideo);
    videos[i].addEventListener("click", reenviar);
}


