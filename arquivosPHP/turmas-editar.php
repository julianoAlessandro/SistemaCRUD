<?php
require_once "classes/Turma.php";
$id = $_GET['id'];
$turma = new Turma($id);
header('location:turmas-listar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando turma</title>

</head>
<body>
    <h1>Sistema Academico</h1><br>
    <h3>Nova Turma</h3>
    <form action="turmasEditarGravar.php" method="POST">
    <input type="hidden"  name="id" value="<?= $turma ->id ?>">
    <label for ="descTurma">TURMA:</label>
    <input type="text"  name="descTurma" value="<?= $turma ->descTurma ?>">
    <label for="ano"> ANO:</label>
    <input type="number"  name="ano" value="<?= $turma ->ano ?>">
    <input type="submit" value="GRAVAR">
    







</form>

    
</body>
</html>