<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            background-color : skyblue;
        }
        form{
            
            width: 350px;
            margin : 100px auto;
        }
        input{
            display: block;
            width: 300px;
            padding: 10px;
            outline: none;
            margin: 15px;
        }
        #cadastra{
            width: 325px;
        }
    </style>
</head>
<body>
<form action="" method="post">
        <input type="text" name="origem" maxlength="100" placeholder="Origem">       
        <input type="text" name="valor" maxlength="12" placeholder="Valor">
        <input type="text" name="dia_recebimento" maxlength="2"placeholder="Dia do recebimento">
        <input type="submit" name="cadastra" id="cadastra" value="Cadastra">
    </form>
</body>
</html>