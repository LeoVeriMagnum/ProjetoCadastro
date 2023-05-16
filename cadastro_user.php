<?php
    include("Conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "<h1>Dados do Usuário</h1>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Telefone: $fone <br>";
    echo "Senha: $senha <br>";
    
    $sql = "insert into usuario (name_user, fone_user, email_user, senha)";

    $sql .= "values ('".$nome."','".$fone."', '".$email."', '".$senha."')";

    //echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
    
?>