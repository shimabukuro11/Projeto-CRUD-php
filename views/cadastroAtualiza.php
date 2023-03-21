<?php include("../models/conexao.php"); ?>
<?php include("blades/header.php"); ?>
    <?php
    $query = mysqli_query($conexao,"SELECT * FROM pessoas WHERE codigo= ". $_GET["ida"]);
    while($exibe = mysqli_fetch_array($query)){
    ?>
    <div class="container border rounded mt-5 bg-white pt-3 pb-3 ps-3 pe-3">
    <form action="../controllers/atualizarAluno.php" method="post">
        <div class="row">
            <div class="col">
                <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0]?>">
                <label class="form-label">Nome</label>
                <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1]?>"><br>
            </div>
            <div class="col">
                <label class="form-label">Cidade</label>
                <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2]?>"><br>
            </div>
        </div>
        <input class="form-check-input" type="radio" value="M" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>>
        <label class="radio-inline">Masculino</label><br>
        <input class="form-check-input" type="radio" value="F" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>>
        <label class="radio-inline">Feminino</label><br>
        <input class=" mt-2 mb-3 btn btn-success" type="submit" value="Atualizar">
    </form>
    </div>
    <?php } ?>
<?php include("blades/footer.php"); ?>










