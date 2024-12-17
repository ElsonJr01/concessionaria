<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <form action="admin.php" method="POST">

        <h1> Cadastrar Veiculos </h1>    
    

    <label> Chassi: *</labe><br>
    <input type="text" name="chassi" placeholder="Digite o Chassi do carro" required/>
    <br><br>
    
    <label> Marca: *</labe><br>
    <input type="text" name="marca" placeholder="Digite a marca do veiculo" required/>
    <br><br>
    
    <label> Modelo:  *</labe><br>
    <input type="text" name="modelo" placeholder="Digite o modelo do carro" required/>
     <br><br>
     
     <label>    Ano: *</labe><br>
     <input type="number" name="ano" value="2024" required/>
     <br><br>

    <label> Cor: *</labe><br>
    <input type="text" name="cor" placeholder="Digite a cor do carro" required/>
    <br><br>

    <label> Tipo de Combustivel: *</labe><br>
    <select name="combustivel" id="">
    <option value="gasolina"></option>
    <option value="alcool"></option>
    <option value="diesel"></option>
    <option value="eletrico"></option>
    </select>

    <label>Tração </label><br>
    <select name="tracao">
        <option selected disabled> Selecione a tracao</option>
        <option value="20">Dianteira</option>
        <option value="10">Traseira</option>
        </select><br><br>

        <label>Rastreador </label><br>
    <select name="rastreador">
        <option selected disabled> Selecione rastreador</option>
        <option value="1">Sim</option>
        <option value="0">Nao</option>
        </select><br><br>

<label>Cambio</label><br>
    <select name="cambio">
        <option selected disabled> Selecione o cambio</option>
        <option value="0">Manual</option>
        <option value="1">Automatico</option>
        </select><br><br>

<button type="submit" name="cadastrar" class="btn1">cadastrar</button>




</body>
</html>

<?php

if(isset( $_POST['cadastrar'] )){
include 'conexao.php';

$chassi = $_POST['chassi'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$ano = $_POST['ano'];
$cor = $_POST['cor'];
$cambio = $_POST['cambio'];
$tracao = $_POST['tracao'];
$tipocombustivel = $_POST['combustivel'];
$rastreador = $_POST['rastreador'];

if($rastreador == 'sim'){
    $rastreador = true; 
} else{
    $rastreador = false;
}

if(isset ($_POST['cambio'])){
    $cambio = true;
}
$comandosql = "INSERT INTO `veiculos`(`chassi`, `modelo`, `marca`, `ano`, `cor`, `cambio`, `tracao`, `tipocombustivel`, `rastreador`) VALUES ('$chassi', '$modelo', '$marca', '$ano', '$cor', '$cambio', '$tracao', '$tipocombustivel', '$rastreador')";
$rs = mysqli_query($conexao, $comandosql);



}
?>