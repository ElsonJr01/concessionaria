<?php

include 'conexao.php'; 

if(isset( $_POST['entrar'] )){
$login = $_POST['login'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM `admin` WHERE `login`  = '$login' AND `senha` = '$senha';";
$rs = mysqli_query($conexao, $sql);

if (mysqli_num_rows($rs) !=0 ) {

echo "<script language='javascript' type='text/javascript'>
alert('login realizado com todo sucesso do mundo.');
window.location.href='admin.php';
</script>";
} else{
    echo "<script language='javascript' type='text/javascript'>
    alert('Alguma coisa deu errado ai.');
    window.location.href='admin.php';
    </script>";
}

mysqly_close($conexao); 

//CADASTRAR VEICULOS


}
?>