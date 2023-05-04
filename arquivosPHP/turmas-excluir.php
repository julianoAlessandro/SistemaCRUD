<?php

require_once 'classes/Turma.php';
$id= $_GET['id'];
$turma = new Turma($id);
$turma -> excluir();
header('location:turmas-listar.php');


  
?>