<?php
include("../models/conexao.php");

mysqli_query($conexao, "UPDATE pessoas SET nome='".$_POST["alunoNome"]."', cidade='".$_POST["alunoCidade"]."' WHERE codigo= " .$_POST["alunoCodigo"]);

header("location:../");

?>