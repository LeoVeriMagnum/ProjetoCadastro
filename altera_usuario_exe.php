<?php
include('Conexao.php');

 $pasta_destino = 'fotos/';
$extensao = strtolower(substr($_FILES['foto']['name'], -4));
 $nome_foto = $pasta_destino.date("Ymd-His") . $extensao;
move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);



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
    senha = '$senha',
    foto = '$nome_foto'
    where id_user = $id_user";

echo $sql . "<br>";

$result = mysqli_query($con, $sql);
if ($result)
    echo "Dados alterados com sucesso!<br>";
else
    echo "Erro ao alterar dados: " . $mysqli_error($con) . "!";
?>

<a href="index.php">Voltar</a>