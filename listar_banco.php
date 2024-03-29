<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Banco</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Form de Dados</title>
    <script src="https://kit.fontawesome.com/508e2598fb.js"></script>
</head>

<body>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Lista do BD</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID_Dado</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>CheckBoxValue</th>
                        <th>RadioValue</th>
                        <th>ComboValue</th>
                        <th>Ação</th>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        include './connection.php';
                        $conn = getConnection();
                        $sql = "SELECT * FROM form";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        
                        foreach($result as $value){
                            $id = $value['id_form'];
                            $inteiro = $value['inteiro'];
                            $email = $value['email'];
                            $senha = $value['senha'];
                            $checkBox = $value['checkBox'];
                            $radio = $value['radio'];
                            $combo = $value['comboBox'];
                        
                        ?>
                        <td><?php echo $id ?></td>
                        <td><?php echo $inteiro ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $senha ?></td>
                        <td><?php echo $checkBox ?></td>
                        <td><?php echo $radio ?></td>
                        <td><?php echo $combo ?></td>
                        <td><a class="btn-sm btn-warning" href="editar_dado.php?id=<?php echo $id ?>"><i class="far fa-edit"></i>&nbsp;Editar</a>
                        <a class="btn-sm btn-danger" href="deletar_dado.php?id=<?php echo $id ?>"><i class="far fa-trash-alt"></i>&nbsp;Deletar</a>
                    </td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>