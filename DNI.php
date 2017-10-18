<?php
/**
* Classe que representa a un Alumne Becari
*/

class DNI extends NIF{
    protected $numero='43565583';
    public function getDNI(){
        return $this->numero;
    }
}

?>