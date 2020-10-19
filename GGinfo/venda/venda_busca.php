<?php

    $sql = "SELECT id_venda, clientes.nome AS cliente, funcionarios.nome AS funcionario, dispositivos.fabricante AS computador, impressora.fabricante AS impressora, vendas.quantidade, vendas.preco FROM vendas

    JOIN funcionarios ON funcionarios.id_funcionario = vendas.funcionario
    JOIN dispositivos ON dispositivos.id_dispositivo = vendas.computador
    JOIN impressora on impressora.id_impressora = vendas.impressora    
    JOIN clientes ON clientes.id_cliente = vendas.cliente";

    include "../conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<tr>";

            $resposta .= "<td>".$lh['id_venda']."</td>";

            $resposta .= "<td>".$lh['cliente']."</td>";

            $resposta .= "<td>".$lh['funcionario']."</td>";

            $resposta .= "<td>".$lh['computador']."</td>";

            $resposta .= "<td>".$lh['impressora']."</td>";

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