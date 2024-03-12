<?php
    require_once 'Rilevatore.php';

    class RilevatoreDiPressione extends Rilevatore{
        protected $tipologia;

        function __construct($id,$sogliaDiAllarme,$codiceSeriale,$tipologia){
            parent::__construct($id,"bar",$sogliaDiAllarme,$codiceSeriale);
            $this->tipologia=$tipologia;
        }

    }
?>