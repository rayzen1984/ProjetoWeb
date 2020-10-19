$(document).ready(function () {

    $("#conteudo").on('submit','#frmCliente', function (e) {
   
    e.preventDefault();
   
    var formulario = $(this).serialize();
   
    $.ajax({
   
    type: "post",
   
    url: "cliente/ins_cliente.php",
   
    data: formulario,
   
    dataType: "text",
   
    success: function (response) {
   
    if(response == "ok"){
   
    $('#frmCliente').each (function(){
   
    this.reset();
   
    });
   
    alert("Cliente inserido com sucesso!");
   
    }else{
   
    alert(response);
   
    }
   
    }
   
    });
   
    });
   
   });

   $(document).ready(function () {

    $("#conteudo").on('submit','#frmFuncionario', function (e) {
   
    e.preventDefault();
   
    var formulario = $(this).serialize();
   
    $.ajax({
   
    type: "post",
   
    url: "funcionario/ins_funcionario.php",
   
    data: formulario,
   
    dataType: "text",
   
    success: function (response) {
   
    if(response == "ok"){
   
    $('#frmFuncionario').each (function(){
   
    this.reset();
   
    });
   
    alert("Funcionário inserido com sucesso!");
   
    }else{
   
    alert(response);
   
    }
   
    }
   
    });
   
    });
   
   });

   $(document).ready(function () {

    $("#conteudo").on('submit','#frmComputador', function (e) {
   
    e.preventDefault();
   
    var formulario = $(this).serialize();
   
    $.ajax({
   
    type: "post",
   
    url: "computador/ins_computador.php",
   
    data: formulario,
   
    dataType: "text",
   
    success: function (response) {
   
    if(response == "ok"){
   
    $('#frmComputador').each (function(){
   
    this.reset();
   
    });
   
    alert("Computador inserido com sucesso!");
   
    }else{
   
    alert(response);
   
    }
   
    }
   
    });
   
    });
   
   });

   $(document).ready(function () {

    $("#conteudo").on('submit','#frmImpressora', function (e) {
   
    e.preventDefault();
   
    var formulario = $(this).serialize();
   
    $.ajax({
   
    type: "post",
   
    url: "impressora/ins_impressora.php",
   
    data: formulario,
   
    dataType: "text",
   
    success: function (response) {
   
    if(response == "ok"){
   
    $('#frmImpressora').each (function(){
   
    this.reset();
   
    });
   
    alert("Impressora inserido com sucesso!");
   
    }else{
   
    alert(response);
   
    }
   
    }
   
    });
   
    });
   
   });

   $(document).ready(function () {

    $("#conteudo").on('submit','#frmVenda', function (e) {
   
    e.preventDefault();
   
    var formulario = $(this).serialize();
   
    $.ajax({
   
    type: "post",
   
    url: "venda/ins_venda.php",
   
    data: formulario,
   
    dataType: "text",
   
    success: function (response) {
   
    if(response == "ok"){
   
    $('#frmVenda').each (function(){
   
    this.reset();
   
    });
   
    alert("Venda inserida com sucesso!");
   
    }else{
   
    alert(response);
   
    }
   
    }
   
    });
   
    });
   
   

   $("#conteudo").on('click','#btn_bscClientes', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "cliente/cliente_busca.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#tblClientes').html(response);

        }

    });

});


$("#conteudo").on('click','#btn_bscFuncionarios', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "funcionario/funcionario_busca.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#tblFuncionarios').html(response);

        }

    });

});


$("#conteudo").on('click','#btn_bscDispositivos', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "computador/computador_busca.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#tblDispositivos').html(response);

        }

    });

});

$("#conteudo").on('click','#btn_bscImpressora', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "impressora/impressora_busca.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#tblImpressora').html(response);

        }

    });

});

$("#conteudo").on('click','#btn_bscVendas', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "venda/venda_busca.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#tblVendas').html(response);

        }

    });

});


$("#conteudo").on('focus','#cmpCl', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "cliente/cliente_select.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#cmpCl').html(response);

        }

    });

});


$("#conteudo").on('focus','#cmpFn', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "funcionario/funcionario_select.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#cmpFn').html(response);

        }

    });

});

$("#conteudo").on('focus','#cmpCmp', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "computador/computador_select.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#cmpCmp').html(response);

        }

    });

});

$("#conteudo").on('focus','#cmpImp', function (e) {

    e.preventDefault();

    $.ajax({

        type: "post",

        url: "impressora/impressora_select.php",

        data: "busca",

        dataType: "text",

        success: function (response) {

            $('#cmpImp').html(response);

        }

    });

});




});