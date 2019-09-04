<!DOCTYPE html>
<html lang="pt-br  ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<style type="text/css">

</style>

<body>
    <section class="container">
        <form action="inserir_dados.php" method="post">
            <div class="form-group">
                <label>Input inteiro @int</label>
                <input type="number" class="form-control" id="" placeholder="Inteiro" name="varInteiro">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Input String @email</label>
                <input type="email" class="form-control" id="" placeholder="Email" name="varString">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Input String @senha</label>
                <input type="password" class="form-control" id="" placeholder="Password">
            </div>

            <label for="">Input CheckBox @Value</label>
            <div class="form-group">
                <label class="checkbox-inline">
                    <input type="checkbox" id="" value="option1"> 1
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="" value="option2"> 2
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="" value="option3"> 3
                </label>
            </div>
            <label for="">Input radio @Value</label>


            <div class="form-group">
                <label class="radio">
                    <input type="radio" name="#" value="option1"> 1
                </label>
                <label class="radio">
                    <input type="radio" name="#" value="option2"> 2
                </label>
                <label class="radio">
                    <input type="radio" name="#" value="option3"> 3
                </label>
            </div>

            <div class="form-group">
                <label>Input comboBox @Value</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <button type="submit" class="">Cadastrar</button>
        </form>

    </section>

    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>