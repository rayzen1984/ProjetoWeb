<?php

    $sql = "SELECT * FROM clientes";

    include "../conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<tr>";

            $resposta .= "<td>".$lh['id_cliente']."</td>";

            $resposta .= "<td>".$lh['nome']."</td>";

            $resposta .= "<td>".$lh['cpf']."</td>";

            $resposta .= "<td>".$lh['endereco']."</td>";

            $resposta .= "<td>".$lh['telefone']."</td>";

            $resposta .= "<td>".$lh['email']."</td>";

            $resposta .= "</tr>";

        }

        mysqli_close($con);

        echo $resposta;

    }else{

        mysqli_close($con);

        echo "Erro: " . $sql . "<br>" . mysqli_error($con);

    }

?>