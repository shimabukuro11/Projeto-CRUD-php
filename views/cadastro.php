<?php include("blades/header.php"); ?>
<body>
    <div class="container border rounded mt-5 bg-white pt-3 pb-3 ps-3 pe-3">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <div class="row">
            <div class="col">
                <label class="form-label">Nome</label>
                <input class="form-control" type="text" name="alunoNome"><br>
            </div>
            <div class="col">
                <label class="form-label">Cidade</label>
                <input class="form-control" type="text" name="alunoCidade"><br>
            </div>
        </div> 
        <input class="form-check-input" type="radio" value="Masculino" name="alunoSexo">
        <label class="radio-inline">Masculino</label><br>
        <input class="form-check-input" type="radio" value="Feminino" name="alunoSexo">
        <label class="mb-3 radio-inline">Feminino</label><br>
        <input class=" mt-2 mb-3 btn btn-success" type="submit" value="Cadastrar">
    </form>
    </div>
    <?php include("blades/footer.php"); ?>










