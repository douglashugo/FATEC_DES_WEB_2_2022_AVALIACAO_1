<?php
 


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $idfigurinha = $_POST['id'];
    $nomesalvo = $_POST['nome'];
    $selecao = $_POST['selecao'];
    if(!file_exists("figurinhas.txt")){
        $handle = fopen("figurinhas.txt", "w");
    }else {
        $handle = fopen("figurinhas.txt", "a");
    }

    fwrite($handle, $idfigurinha."\n");
    fwrite($handle, $nomesalvo."\n");
    fwrite($handle, $selecao."\n");
    fwrite($handle,"\n");
    fflush($handle);
    fclose($handle);

    header("location: welcome.php");

}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        
        body{ font: 14px sans-serif;  }
        .wrapper{ width: 750px; padding: 20px; margin:auto;}
    </style>
</head>
<body style="text-align:center">
    <div class="wrapper">
        <h1>Cadastro de Figurinhas</h1>
        <br><br>
        <p>Favor inserir ID da Figurinha, Nome e Seleção do Jogador.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <br><br>
                <label>ID</label>
                <input style="width: 350px; margin:auto;" type="text" name="id" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Nome</label>
                <input style="width: 350px; margin:auto;" type="text" name="nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Seleção</label>
                <input style="width: 350px; margin:auto;" type="text" name="selecao" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>    
</body>
</html>