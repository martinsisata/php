<?php

class Usuario {
    //variavel de classe -> vira atributo
    //função vira método

    //QUALIFICADOR DE ACESSO
    //public -> pode ser acessado de qualquer lugar
    //private -> pode ser acessado dentro da classe

    public $login;
    public $senha;
    private $perfil;


    //função -> metodo
    public function logar($vlogin,$vsenha){
        if($vlogin == $this->login && $vsenha == $this->senha){
            echo "Logado";
        }else{
            echo "Erro ao logar";
        }
    }

}

?>
