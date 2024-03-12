<?php

    class Impianto{
        protected $nome;
        protected $latitudine;
        protected $longitudine;
        protected $listaDispositivi;

        function __construct(){
            $this->nome = "Impianto ITISMEUCCI";
            $his->latitudine="";
            $this->listaDispositivi= [
            new RilevatoreDiUmidita(), 
            new RilevatoreDiPressione(),     
            new DispoDiAllarme()
        ];

        }
    }
?>