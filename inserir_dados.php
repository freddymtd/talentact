<?php

include './connection.php';
$conn = getConnection();


$number = $_POST['varInteiro']; 
$text = $_POST['varString'];
$senha = $_POST['senha'];
$cxbValue = $_POST['cxb'];
$rdbValue = $_POST['rdb'];
$combo = $_POST['comboSelect'];

//$sql = "INSERT INTO form (inteiro, email, senha, checkBox, radio, comboBox) VALUES ('$number', '$text', '$senha', '$cxbValue', '$rdbValue', '$combo')";


$sql = "INSERT INTO form (inteiro, email, senha, checkBox, radio, comboBox) VALUES(?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $number);
$stmt->bindValue(2, $text);
$stmt->bindValue(3, $senha);
$stmt->bindValue(4, $cxbValue);
$stmt->bindValue(5, $rdbValue);
$stmt->bindValue(6, $combo);

if($stmt->execute()){
    echo 'Salvo com sucesso!';
    echo $sql;


}else{
    echo 'Erro ao salvar!';
    echo $sql;
}

?>