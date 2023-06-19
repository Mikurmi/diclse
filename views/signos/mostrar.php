<?php
    require_once('mostrar.view.php');
        echo "<div class='tablas'>";
        require_once('../../models/signo.php');
        require_once('../../db/connection.php');
        $codigo = $_POST['conf1'][0] . "|" . $_POST['conf2'][0] . "|" . $_POST['conf3'][0] . "-" . $_POST['ori'] . "-" . $_POST['mov1'][0] . "|" .$_POST['mov2'][0] . "-" . $_POST['esp'][0] . "-" . $_POST['no_man'][0];
        $signos = Signo::getLikeCodigo($codigo);   
            
        for($i = 0; $i < count($signos); $i++){
            echo"
            <div class='card'>
            <form action='mostrar.php' method='post'>
                <video id='" . $signos[$i]->codigo ."' src='../../img/" . $signos[$i]->definiciones[0] . ".mp4'>
            </form>
            </div>
            ";
        }
        echo "</div>
        <script src='../../helpers/playClickVideo.js'></script>
        <div class='footer'>
        </div>";
    
    
?>