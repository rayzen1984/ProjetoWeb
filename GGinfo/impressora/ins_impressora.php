<?php

    if(isset($_POST['campo_fabricante'])){

        $fabricante = $_POST['campo_fabricante'];

        $impressao = $_POST['campo_impressao'];

        $tipo = $_POST['campo_tipo'];

        $quantidade = $_POST['campo_quantidade'];

        $preco = $_POST['campo_preco'];

        $sql = "INSERT INTO impressora(fabricante, impressao, tipo, quantidade, preco)VALUES('$fabricante','$impressao','$tipo','$quantidade','$preco')";

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