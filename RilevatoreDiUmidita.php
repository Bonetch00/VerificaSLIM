<?php

    class RilevatoreDiUmidita extends Rilevatore{
        protected $posizione;

        function __construct($posizione){
            parent __construct($id,"%",$sogliaDiAllarme,$codiceSeriale);
            $this->posizione=$posizione;
        }

    }
?>