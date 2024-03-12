<?php

    class RilevatoreDiPressione extends Rilevatore{
        protected $tipologia;

        function __construct($tipologia){
            parent __construct($id,"bar",$sogliaDiAllarme,$codiceSeriale);
            $this->tipologia=$tipologia;
        }

    }
?>