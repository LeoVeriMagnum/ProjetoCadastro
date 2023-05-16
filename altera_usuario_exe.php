<?php
    include('Conexao.php');
    $id_user = $_POST['id_user'];
    $name_user = $_POST['nome'];
    $email_user = $_POST['email'];
    $fone_user = $_POST['fone'];
    $senha = $_POST['senha'];


    echo "<h1>Alteração de dados</h1>";
    echo "<p>Usuário: $name_user</p>";
    $sql = "update usuario set 
    name_user = '$name_user',
    email_user = '$email_user',
    fone_user = '$fone_user',
    senha = '$senha'
    where id_user = $id_user";

    echo $sql. "<br>";

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: ".$mysqli_error($con)."!";
?>

<a href="index.php">Voltar</a>