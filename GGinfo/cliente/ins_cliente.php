<?php

    if(isset($_POST['campo_nome'])){

        $nome = $_POST['campo_nome'];

        $cpf = $_POST['campo_cpf'];

        $endereco = $_POST['campo_endereco'];

        $telefone = $_POST['campo_telefone'];

        $email = $_POST['campo_email'];

        $sql = "INSERT INTO clientes(nome,cpf,endereco,telefone,email)VALUES('$nome','$cpf','$endereco','$telefone','$email')";

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