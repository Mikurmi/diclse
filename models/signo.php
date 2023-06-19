<?php


    class Signo{
        
        public $codigo;
        public $configuracion;
        public $orientacion;
        public $movimiento;
        public $espacio;
        public $no_manual;
        public $definiciones;

       
        function __construct( $configuracion, $orientacion, $movimiento, $espacio, $no_manual, $codigo ){
            
            $this->configuracion = $configuracion;
            $this->orientacion = $orientacion;
            $this->movimiento = $movimiento;
            $this->espacio = $espacio;
            $this->no_manual = $no_manual;
            $this->codigo = $codigo;
            $this->definiciones = self::getDef( $this->codigo );
        }

        public static function getCod( $p1, $p2, $p3, $p4, $p5 ){
            $codigo = $p1 . "-" . $p2 . "-" . $p3 . "-" . $p4 . "-" . $p5;
            return $codigo;
        }

        public static function getDef( $codigo ){
            $db=Db::getConnect();
            $select=$db->prepare('SELECT * FROM definiciones where nombreSigno in ( SELECT nombreSigno from signo_definicion where codigo=:codigo )');
            $select->bindValue('codigo', $codigo);
            $select->execute();
            $definciones = array();
            foreach($select->fetchAll() as $fila){
                array_push($definciones, $fila['nombreArchivo']);
            }
            return $definciones;
        }


        //Devuelve los signos con un codigo similar
        public static function getLikeCodigo($codigo){
            $db=Db::getConnect();
            $select=$db->prepare('SELECT * FROM signo WHERE codigo like :codigo');
            $select->bindValue('codigo',$codigo);
            $select->execute();
            $signos = array();
            foreach($select->fetchAll() as $fila){
                array_push($signos,new Signo( $fila['configuracion'],$fila['orientacion'],$fila['movimiento'],$fila['espacio'], $fila['no_manual'], $fila['codigo']));
            }
            return $signos;
        }


        //Devuelve el signo con ese codigo
        public static function getByCodigo($codigo){
            $db=Db::getConnect();
            $select=$db->prepare('SELECT * FROM signo WHERE codigo = :codigo');
            $select->bindValue('codigo',$codigo);
            $select->execute();
            $fila=$select->fetch();
            //asignarlo al objeto usuario
            if($fila){
                $signo = new Signo( $fila['configuracion'],$fila['orientacion'],$fila['movimiento'],$fila['espacio'], $fila['no_manual'], $fila['codigo']);
                return $signo;
            }else{
                return false;
            }
        }

        //Devuelve un array con todos los productos
        public static function getAll(){
            $db=Db::getConnect();
            $select=$db->prepare('SELECT * FROM signo');
            $select->execute();
            $signos = array();
            foreach($select->fetchAll() as $fila){
                array_push($signos,new Signo($fila['configuracion'], $fila['orientacion'],$fila['movimiento'],$fila['espacio'], $fila['no_manual'], $fila['codigo']));
            }
            return $signos;
        }
    }

?>