<?php

    $sql = "SELECT * FROM clientes";

    include "../conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<option value='".$lh['id_cliente']."'>";

            $resposta .= $lh['nome'];

            $resposta .= "</option>";

        }

        mysqli_close($con);

        echo $resposta;

    }else{

        mysqli_close($con);

        echo "Erro: " . $sql . "<br>" . mysqli_error($con);

    }

?>