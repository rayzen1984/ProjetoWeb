<?php

    if(isset($_POST['campo_nome'])){

        $nome = $_POST['campo_nome'];

        $cpf = $_POST['campo_cpf'];

        $cargo = $_POST['campo_cargo'];

        $login = $_POST['campo_login'];

        $senha = $_POST['campo_senha'];

        $sql = "INSERT INTO funcionarios(nome,cpf,cargo,login,senha)VALUES('$nome','$cpf','$cargo','$login','$senha')";

        include "../conexao.php";

        if (mysqli_query($con, $sql)) {

            echo "ok";

        }else{

            echo "Erro: " . $sql . "<br>" . mysqli_error($con);

        }

        mysqli_close($con);



    }else{

        echo "erro";

    }

?>