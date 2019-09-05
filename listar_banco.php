<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Banco</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Form de Dados</title>
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
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>