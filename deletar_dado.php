<?php
    include './connection.php';
    $conn = getConnection();

    $id = $_GET['id'];




    $sql = "DELETE FROM form WHERE id_form = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    echo $sql;
    if($stmt->execute()){
        echo 'Excluido com sucesso';
    }else{
        echo 'erro ao excluir';
    }
    ?>

<h3>Atualizado com sucesso</h3>
    <a href = "listar_banco.php">Voltar</a>