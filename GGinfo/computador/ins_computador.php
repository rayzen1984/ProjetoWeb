<?php

    if(isset($_POST['campo_fabricante'])){

        $fabricante = $_POST['campo_fabricante'];

        $processador = $_POST['campo_processador'];

        $memoria = $_POST['campo_memoria'];

        $hd = $_POST['campo_hd'];

        $tela = $_POST['campo_tela'];

        $quantidade = $_POST['campo_quantidade'];

        $preco = $_POST['campo_preco'];

        $tipo = $_POST['campo_tipo'];

        $sql = "INSERT INTO dispositivos(fabricante, processador, memoria, hd, tela, quantidade, preco, tipo)VALUES('$fabricante','$processador','$memoria','$hd','$tela','$quantidade','$preco','$tipo')";

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