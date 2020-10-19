<?php

    $sql = "SELECT * FROM impressora";

    include "../conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<option value='".$lh['id_impressora']."'>";

            $resposta .= $lh['fabricante']." ".$lh['impressao'];

            $resposta .= "</option>";

        }

        mysqli_close($con);

        echo $resposta;

    }else{

        mysqli_close($con);

        echo "Erro: " . $sql . "<br>" . mysqli_error($con);

    }

?>