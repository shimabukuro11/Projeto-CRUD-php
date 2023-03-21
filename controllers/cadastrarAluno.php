<?php
include("../models/conexao.php");

mysqli_query($conexao, "INSERT INTO pessoas (nome, cidade, sexo) values ('".$_POST["alunoNome"]."', '".$_POST["alunoCidade"]."', '".$_POST["alunoSexo"]."')");

header("location:../");

?>