<?php

    $sql = "SELECT * FROM impressora";

    include "../conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<tr>";

            $resposta .= "<td>".$lh['id_impressora']."</td>";

            $resposta .= "<td>".$lh['fabricante']."</td>";

            $resposta .= "<td>".$lh['impressao']."</td>";

            $resposta .= "<td>".$lh['tipo']."</td>";

            $resposta .= "<td>".$lh['quantidade']."</td>";

            $resposta .= "<td>".$lh['preco']."</td>";

            $resposta .= "</tr>";
            
        }

        mysqli_close($con);

        echo $resposta;

    }else{

        mysqli_close($con);

        echo "Erro: " . $sql . "<br>" . mysqli_error($con);

    }

?>