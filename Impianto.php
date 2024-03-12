<?php
    include_once 'RilevatoreDiUmidita.php';
    include_once 'RilevatoreDiPressione.php';
    include_once 'DispositivoDiAllarme.php';

    class Impianto implements JsonSerializable{
        protected $nome;
        protected $latitudine;
        protected $longitudine;
        protected $listaDispositivi;

        function __construct(){
            $this->nome = "Impianto ITISMEUCCI";
            $this->latitudine="256";
            $this->longitudine="657";
            $this->listaDispositivi= [
            new RilevatoreDiUmidita("01","120","01","terra"), 
            new RilevatoreDiPressione("02","200","02","gas"),     
            new DispositivoDiAllarme("03","333 4444 5555")
            ];

        }

        public function jsonSerialize() {
            $i = [
                "nome"=>$this->nome,
                "latitudine"=>$this->latitudine,
                "longitudine"=>$this->longitudine,
            ];
            return $i;
        }
    }
?>