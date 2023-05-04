<?php
// inclui o arquivo  que contém a definição da classe Turma
require_once "classes/Turma.php";
//cirar um novo objeto turma
$turma = new Turma();
//define as propriedades descTurma e ano do objeto Turma
//Com os valores enviados pelo formulario
$turma ->descTurma = $_POST['descTurma'];
$turma ->ano = $_POST['ano'];
// chama o método inserir() no objeto Turma para inserir 
// os dados da nova turma no banco de dados
$turma -> inserir();

?>