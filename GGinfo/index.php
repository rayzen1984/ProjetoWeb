
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="meuestilo.css">
    <link rel="stylesheet" type="text/css" href="formulario.css">
    <title>Loja Web GGInfo</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>

</head>

<body>
        
        <div class="topo">
            <div class="logo">
                 <img src="img/gg.jpg" width="150" height="150">
            </div>
        </div>

        
            <div class="menu2">
            <nav class= "menu">
                <ul>
                    <li>Cadastrar
                        <ul>
                             <li><a href="index.php?p=cc">Cliente</a></li>
                             <li><a href="index.php?p=cf">Funcionário</a></li>
                             <li><a href="index.php?p=cd">Computador</a></li>
                             <li><a href="index.php?p=ci">Impressora</a></li>
                        </ul>
                    </li>
                    <li>Consultar
                        <ul>
                            <li><a href="index.php?p=vc">Clientes</a></li>
                            <li><a href="index.php?p=vf">Funcionário</a></li>
                            <li><a href="index.php?p=vd">Computadores</a></li>
                            <li><a href="index.php?p=vi">Impressoras</a></li>
                            <li><a href="index.php?p=vv">Vendas</a></li>
                        </ul>
                    </li>
                    <li>Venda
                        <ul>
                            <li><a href="index.php?p=rv">Realizar venda</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            </div>
          

        <div class="principal">
            <div id="conteudo" class="centro">
            
             
            <?php

                if(isset($_GET['p'])){

                    $pagina = $_GET['p'];

                }else{

                    $pagina = 'cc';

                }

                if($pagina == 'cc'){

                    include "cliente/cliente_form.html";

                }elseif($pagina == 'vc'){

                    include "cliente/cliente_ver.php";

                }elseif($pagina == 'cf'){

                    include "funcionario/funcionario_form.html";

                }elseif($pagina == 'vf'){

                    include "funcionario/funcionario_ver.php";

                }elseif($pagina == 'cd'){

                    include "computador/computador_form.html";

                }elseif($pagina == 'vd'){

                    include "computador/computador_ver.php";

                }elseif($pagina == 'ci'){

                    include "impressora/impressora_form.html";

                }elseif($pagina == 'vi'){

                    include "impressora/impressora_ver.php";

                }elseif($pagina == 'rv'){

                    include "venda/venda_form.php";

                }elseif($pagina == 'vv'){

                    include "venda/venda_ver.php";

                }

            ?>
            
            
            </div>
        </div>

        

            <div class="rodape">
		        <div class="direita">
			         <h4><img src="img/gg.jpg" width="100px" height="100px"></h4>
			         <h5>Página desenvolvida pelos alunos do curso de Programação Web do IFPA.</h5>	
			         <h6>@2020. Todos os direitos reservados.</h6>
		        </div>
		        <div class="meio">
			       
		        </div>
		        <div class="esquerda">
			         <h4>Midias Sociais</h4>
			         <h5>
				     
			        </h5>
		        </div>
            </div>        

        

   

</body>

</html>