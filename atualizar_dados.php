<?php
    include './connection.php';
    $conn = getConnection();

    $id = $_POST['id'];
    $number = $_POST['varInteiro']; 
    $text = $_POST['varString'];
    $senha = $_POST['senha'];



    $sql = "UPDATE form SET inteiro = :number, email = :text, senha = :senha WHERE id_form = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':number', $number);
    $stmt->bindParam(':text', $text);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':id', $id);
    echo $sql;
    if($stmt->execute()){
        echo 'Atualizado com sucesso';
    }else{
        echo 'erro ao atualizar';
    }
    ?>



    <h3>Atualizado com sucesso</h3>
    <a href = "listar_banco.php">Voltar</a>