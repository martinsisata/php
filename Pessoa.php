<?php

class Pessoa {
    
    private $nome;
    private $idade;

    //AGORA PARA ACESSAR ESSES ATRIBUTOS SERÁ NECESSARIOS METODOS DE ENTRADA E SAÍDA

    //ALT + INSERT  -> GERA OS METODOS SETs E GETs

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }



}
?>
