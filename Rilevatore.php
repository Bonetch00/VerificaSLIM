<?php
    class Rilevatore{
        protected $id;
        protected $misurazione;
        protected $unitaDiMisura;
        protected $sogliaDiAllarme;
        protected $codiceSeriale;
        

        function __construct($id,$unitaDiMisura,$sogliaDiAllarme,$codiceSeriale){
            $this->id = $id;
            $this->misurazione = array();
            $this->unitaDiMisura = $unitaDiMisura;
            $this->sogliaDiAllarme = $sogliaDiAllarme;
            $this->codiceSeriale = $codiceSeriale;
        }

        function addMisurazione($data,$valore){
            $this->misurazione["$data"]=$valore;
        }

        



    }
?>