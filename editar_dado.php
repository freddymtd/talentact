<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Banco</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/508e2598fb.js"></script>
</head>


<body>
    <section class="container">
        <form action="atualizar_dados.php" method="post">


            <?php
            include './connection.php';
            $conn = getConnection();
            $id = $_GET['id'];
            $sql = "SELECT * FROM form WHERE id_form = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            foreach ($result as $value) {
                $id = $value['id_form'];
                $inteiro = $value['inteiro'];
                $email = $value['email'];
                $senha = $value['senha'];
                $checkBox = $value['checkBox'];
                $radio = $value['radio'];
                $combo = $value['comboBox'];

                ?>
                <div class="form-group">
                    <label>Input inteiro @int</label>
                    <input type="number" class="form-control" id="" name="varInteiro" value="<?php echo $inteiro ?>">
                    <input type="number" class="form-control"  name="id" value="<?php echo $id?>" style="display : none">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Input String @email</label>
                    <input type="email" class="form-control" id="" placeholder="Email" name="varString" value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Input String @senha</label>
                    <input type="password" class="form-control" id="" placeholder="Password" name="senha" value="<?php echo $senha ?>">
                </div>

                <label for="">Input CheckBox @Value</label>
                <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="" value="teste1" name="cxb"> 1
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="" value="teste2" name="cxb"> 2
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="" value="teste3" name="cxb"> 3
                    </label>
                </div>
                <label for="">Input radio @Value</label>


                <div class="form-group">
                    <label class="radio">
                        <input type="radio" value="rdb1" name="rdb"> 1
                    </label>
                    <label class="radio">
                        <input type="radio" value="rdb2" name="rdb"> 2
                    </label>
                    <label class="radio">
                        <input type="radio" value="rdb3" name="rdb"> 3
                    </label>
                </div>

                <div class="form-group">
                    <label>Input comboBox @Value</label>
                    <select class="form-control" name="comboSelect">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>


                <button type="submit" class="">Cadastrar</button>

            <?php } ?>
        </form>

    </section>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>