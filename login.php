<?php
    include('Conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario
            where email_user = '$email'
            and senha = '$senha'";

            $result = mysqli_query($con,$sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount>0){
            //logar
            include('cria_sessao.php');
            $_SESSION['login'] = mysqli_fetch_array($result);
            header('Location: index.php');
            } else {
                echo "<h1>Usuário não encontrado!</h1>";
            }

            // if(session_status() != PHP_SESSION_ACTIVE){
            //     session_cache_expire(60); //60min
            //     session_start();
            // }

?>