<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("Conexao.php");
    $pasta_destino = 'fotos/';
    $extensao = strtolower(substr($_FILES['foto']['name'], -4));
    $nome_foto = $pasta_destino.date("Ymd-His") . $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    // fim upload


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario where email_user = '$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "O email já está cadastrado no banco de dados.";
    } else {
        echo "O email não está cadastrado no banco de dados.";
    }


    echo "<h1>Dados do Usuário</h1>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Telefone: $fone <br>";
    echo "Senha: $senha <br>";
    
    $sql = "insert into usuario (name_user, fone_user, email_user, senha, foto)";

    $sql .= "values ('".$nome."','".$fone."', '".$email."', '".$senha."','".$nome_foto."')";

    //echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
    
?>
    <button><a href="index.php">Tela Inicial</a></button>
</body>
</html>

