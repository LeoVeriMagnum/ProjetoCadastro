<?php
     include('Conexao.php');
     $id_user = $_GET['id_user'];
     $sql = "select * from usuario  where id_user=$id_user";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
     $name_user = $row['name_user'];


    echo "<h1>Deletar dados do usuario</h1>";
    echo "<p>Usuário: $name_user</p>";
    $sql = "delete from usuario where id_user = $id_user";


    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados deletados com sucesso!<br>";
    else
        echo "Erro ao deletar dados: ".$mysqli_error($con)."!";
?>

<a href="index.php">Voltar</a>