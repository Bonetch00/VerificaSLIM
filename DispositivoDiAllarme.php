<?php

class DispositivoDiAllarme {
    protected $id;
    protected $numeroDiTelefono;

    function __construct($id, $numeroDiTelefono) {
        $this->id = $id;
        $this->numeroDiTelefono = $numeroDiTelefono;
    }

}