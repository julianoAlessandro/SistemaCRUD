<?php
require_once "classes/Turma.php";
$turma = new Turma();
$turma ->descTurma = $_POST['descTurma'];
$turma ->ano = $_POST['ano'];
$turma -> atualizar();
header('location:turmas-listar.php');


?>