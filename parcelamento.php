<?php 

header( "Content-type:text/html; charset=utf-8");

$qtdeparcelas = $_POST["qtdeparcelas"];
$preco = 5298;
$juros = 0;
$total = 0; 
$mensagemtotal = "";

//calculos 
switch($qtdeparcelas) {
    case 1:
        $mensagemtotal = "<h4 style='text-align: center; padding: 30px;'><br><br>O valor total da compra foi de 1 (uma) parcela de R$5.298,00 sem juros</h4>";
        break;
    case 2:
    $mensagemtotal = "<h4 style='text-align: center; padding: 30px;'><br><br>O valor total da compra foi de 2 (duas) parcelas de R$2.649,00 sem juros</h4>";
        break;
    case 3:
        $mensagemtotal = "<h4 style='text-align: center; padding: 30px'><br><br>O valor total da compra foi de 3 (tres) parcelas de R$1.766,00 sem juros</h4>";
        break;
    case 4:
        $mensagemtotal = "<h4 style='text-align: center; padding:30px;'><br><br>O valor total da compra foi de 4 (quatro) parcelas de R$1.324,50 sem juros</h4>";
        break;
    case 5:
        $mensagemtotal = "<h4 style='text-align: center;padding: 30px;'><br><br>O valor total da compra foide 5 (cinco) parcelas de R$1.059,60 sem juros</h4>";
        break;
    case 6:
        $mensagemtotal = "<h4 style='text-align: center;padding: 30px;'><br><br>O valor total da compra foide 6 (seis) parcelas de R$883,00 sem juros</h4>";
        break;
    case 7:
        $mensagemtotal = "<h4 style='text-align: center;padding: 30px;'><br><br>O valor total da compra foide 7 (sete) parcelas de R$756,85 sem juros</h4>";
        break;
    case 8:
        $mensagemtotal = "<h4 style='text-align: center;padding: 30px;'><br><br>O valor total da compra foide 8 (oito) parcelas de R$662,25 sem juros</h4>";
        break;
    case 9:
        $mensagemtotal = "<h4 style='text-align: center;padding: 30px;'><br><br>O valor total da compra foide 9 (nove) parcelas de R$588,66 sem juros</h4>";
        break;
    case 10:
        $mensagemtotal = "<h4 style='text-align: center;padding: 30px;'><br><br>O valor total da compra foide 10 (dez) parcelas de R$529,80 sem juros</h4>";
        break;
    case 11:
        $mensagemtotal = "<h4 style='text-align: center;padding: 30px;'><br><br>O valor total da compra foide 11 (onze) parcelas de R$481,63 com juros de 2.29%a.m <br> Novo valor total da compra de: R$5.419,32</h4>";
        break;
    case 12:
        $mensagemtotal = "<h4 style='text-align: center;padding: 30px;'><br><br>O valor total da compra foide 12 (doze) parcelas de R$481,63 com juros de 2.29%a.m. <br> Novo valor total da compra de: R$5.540,64 </h4>";
        break;
}


//saida
echo "<h2 style='text-align: center; margin-top: 30px;'>PEDIDO CONFIRMADO!</h2><br>";
echo "<div style='text-align: center;'>
<img src='pedido.png' alt='' width='300px' height = '300px' >
</div>"; 
echo $mensagemtotal;
echo "<h3 style='text-align: center;'>Obrigado por comprar na Lojas Bizzi!</h3>";
echo "<br><br><a style='
padding: 15px;
width: 200px;
background-color: rgb(93, 236, 124);
color: white ;
margin-left: 48%;' 
href = 'index.html'>Voltar</a>";

?>