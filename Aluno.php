<?php
//Aluno É UMA pessoa
include_once 'Pessoa.php';
//extends -> Herança

class Aluno extends Pessoa {
    
    private $mat;

    //alt + insert

    public function getMat() {
        return $this->mat;
    }

    public function setMat($mat) {
        $this->mat = $mat;
    }



}
?>
