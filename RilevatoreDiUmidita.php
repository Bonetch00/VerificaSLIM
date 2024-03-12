<?php
    require_once 'Rilevatore.php';

    class RilevatoreDiUmidita extends Rilevatore{
        protected $posizione;

        function __construct($id,$sogliaDiAllarme,$codiceSeriale,$posizione){
            parent::__construct($id,"%",$sogliaDiAllarme,$codiceSeriale);
            $this->posizione=$posizione;
        }

    }
?>