<?php 

    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        include 'conecta.php';
        $conexaoNova = mysqli_connect($servidor, $usuario, $senha , 'questoesestequiometria');

        $nome = $_POST["nome"];

        if (strlen($nome)>255){$erroNome = "Nome muuiiito grande";}
        else {

            $sql = "INSERT into pessoa (nome) values ('$nome');";

            mysqli_query($conexaoNova, $sql);
            mysqli_close($conexaoNova);

            header('Location:questao.php');
            die();

        }


    }

?>