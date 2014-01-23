<?php

include_once 'Usuario.php';

$u = new Usuario();//colocando a classe Usuario na memoria(instanciando)

$u->login = "adm";
$u->senha = "123";

$u->logar("adm", "123");

/////////////////////////////////////////////////////

echo "<br/><br/><br/>";

include_once 'Aluno.php';

$a = new Aluno();
$a->setMat();
$a->setNome("Carlos");
$a->setIdade(20);

$a->imprimir();

?>
