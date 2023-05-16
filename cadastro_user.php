<?php
    include("Conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email_user = '$email'";
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
    
    $sql = "insert into usuario (naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaame_user, fone_user, email_user, senha)";

    $sql .= "values ('".$nome."','".$fone."', '".$email."', '".$senha."')";

    //echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
    
?>