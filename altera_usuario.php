<?php
    include('Conexao.php');
    $id_user = $_GET['id_user'];
    $sql = "select * from usuario  where id_user=$id_user";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="cadastro_user.css" media="screen" />
</head>
<body>
    <div class="container">
        <div class="box-1">
    <h1>Altera Dados - IFSP</h1>
    <form action="altera_usuario_exe.php" method="post" enctype="multipart/form-data">
        <input name="id_user" type="hidden" 
        value="<?php echo $row['id_user']?>">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"
            value="<?php echo $row['name_user']?>">
        </div>
        <div>
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email"
            value="<?php echo $row['email_user']?>">
        </div>
        <div>
            <label for="fone">Telefone: </label>
            <input type="tel" name="fone" id="fone"
            placeholder="(xx) xxxx-xxxx" 
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}"
            value="<?php echo $row['fone_user']?>">
            
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha"
            value="<?php echo $row['senha']?>">
        </div>
        <div>
            <?php if($row['foto'] == "")
                        echo "<td></td>";
                        else    
                        echo "<td><img src='".$row['foto']."' width='200px' height='200px'/></td>";
            ?>
            <input type="file" name="foto" id="foto" accept="image"
            value="<?php echo $row['foto']?>">
        </div>
        <input type="submit" value="Salvar" class="buttom">
    </form>
    </div>
</div>
<footer>Todos os direitos reservados</footer>

</body>
</html>