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

    public function imprimir(){
        echo "<h4>Dados do aluno</h4>";
        echo "Matricula: ".$this->getMat();
        echo "<br/>Nome: ".$this->getNome();
        echo "<br/>Idade: ".$this->getIdade();
    }

}
?>
