<?php
include("../models/conexao.php");


mysqli_query($conexao, "DELETE FROM pessoas WHERE codigo= ".$_GET["ida"]);

header("location:../");

?>