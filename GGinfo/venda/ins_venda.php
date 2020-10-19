<?php

    if(isset($_POST['campo_cliente'])){

        $cliente = $_POST['campo_cliente'];

        $funcionario = $_POST['campo_funcionario'];

        $computador = $_POST['campo_computador'];

        $impressora = $_POST['campo_impressora'];

        $quantidade = $_POST['campo_quantidade'];

        $preco = $_POST['campo_preco'];

        $sql = "INSERT INTO vendas(cliente,funcionario, computador, impressora, quantidade,preco)VALUES('$cliente','$funcionario','$computador', '$impressora', '$quantidade','$preco')";

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