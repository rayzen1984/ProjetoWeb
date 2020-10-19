<?php

    $sql = "SELECT * FROM dispositivos";

    include "../conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<option value='".$lh['id_dispositivo']."'>";

            $resposta .= $lh['fabricante']." ".$lh['processador'];

            $resposta .= "</option>";

        }

        mysqli_close($con);

        echo $resposta;

    }else{

        mysqli_close($con);

        echo "Erro: " . $sql . "<br>" . mysqli_error($con);

    }

?>